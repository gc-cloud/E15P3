<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TextGeneratorRequest;
use App\Helpers\TextGeneratorData; // Class holding all the valid values
use App\Helpers\HamletData; // Class holding all the valid values
use Goutte\Client;


class TextGeneratorController extends Controller
{


    /**
     * Set shared variables and default values
     */
      static $paragraphs= 3;
      static $nValue = 4;
      static $textOutput;
      static $allParagraphs;
      static $wordsToGenerate;
      static $source;
      static $textCorpus;
      static $nGrams =array();
      static $content;


      /**
       * Remove HTML tags, including invisible text such as style and
       * script code, and embedded objects.  Add line breaks around
       * block-level tags to prevent word joining after tag removal.
       * Based code from http://nadeausoftware.com/articles/2007/09/php_tip_how_strip_html_tags_web_page
       * under OSI BSD License.  Added own modifications to trim and remove redundant white space.
       */
      public  function strip_html_tags( $text )
        {
            $text = preg_replace(
                array(
                  // Remove invisible content
                    '@<head[^>]*?>.*?</head>@siu',
                    '@<style[^>]*?>.*?</style>@siu',
                    '@<script[^>]*?.*?</script>@siu',
                    '@<object[^>]*?.*?</object>@siu',
                    '@<embed[^>]*?.*?</embed>@siu',
                    '@<applet[^>]*?.*?</applet>@siu',
                    '@<noframes[^>]*?.*?</noframes>@siu',
                    '@<noscript[^>]*?.*?</noscript>@siu',
                    '@<noembed[^>]*?.*?</noembed>@siu',
                  // Add line breaks before and after blocks
                    '@</?((address)|(blockquote)|(center)|(del))@iu',
                    '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
                    '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
                    '@</?((table)|(th)|(td)|(caption))@iu',
                    '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
                    '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
                    '@</?((frameset)|(frame)|(iframe))@iu',
                ),
                array(
                    ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
                    "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
                    "\n\$0", "\n\$0",
                ),
                $text );
            return trim(strip_tags( $text ));
        }
      /**
       * Select Source of content.
       */
      public function selectSource(){
        // set web Scrapper

            switch (TextGeneratorController::$content){
              case 'loremIpsum':
                TextGeneratorController::$source = TextGeneratorData::$loremIpsum;
                break;
              case "songs":
                TextGeneratorController::$source = TextGeneratorData::$songs;
                break;
              case "cooking":
                TextGeneratorController::$source = TextGeneratorData::$cooking;
                break;
              case "dwa15":
                TextGeneratorController::$source = file_get_contents('http://dwa15.com/','<br>');
                break;
              case "about-harvard":
                TextGeneratorController::$source = file_get_contents('http://www.harvard.edu/about-harvard/','<br>');
                break;
              case "hamlet":
                TextGeneratorController::$source = HamletData::$hamlet;
                break;

            }
      }
      /**
       * Load and sanitize text corpus. Transform into array
       * so we can easily manipulate it.  Copy n-1 words to end of array to
       * handle edge cases
       */
      public function loadTextCorpus(){


        // Prepare for manipulation. Sanitize text and transform to array
        TextGeneratorController::$textCorpus = TextGeneratorController::strip_html_tags(TextGeneratorController::$source);
        TextGeneratorController::$textCorpus = explode(" ",TextGeneratorController::$textCorpus);

        // Make sure that the initial corpus is at least N+1 words long
        if(count(TextGeneratorController::$textCorpus) < TextGeneratorController::$nValue){
          $wordsToCopy = TextGeneratorController::$nValue + 1 - count(TextGeneratorController::$textCorpus);
          for($i = 0; $i < $wordsToCopy; $i++){
            TextGeneratorController::$textCorpus[]=TextGeneratorController::$textCorpus[$i];
          }
        }

        // Copy n words to the end to handle 'wrap-around' edge case
        for($i = 0; $i < TextGeneratorController::$nValue; $i++){
          TextGeneratorController::$textCorpus[]=TextGeneratorController::$textCorpus[$i];
        }
      }

      /**
       * Build nGram.  The nGram is a map of key => value pairs where each key (prefix)
       * is a string representing consecutive combinations of words with size
       * nValue, and each value (suffix) is an array containing the valid words to follow each
       * prefix.  Valid words are repeated in the array since we want to capture
       * the probability of occurrence.  To build, we find all prefixes and all suffixes for each prefix.
       * The if-else initializes or updates the map
       */
      public function buildNGrams(){
          $wordsInCorpus = count(TextGeneratorController::$textCorpus);
          for ($i= 0; $i < $wordsInCorpus; $i++){
            $prefix = implode(" ",array_slice(TextGeneratorController::$textCorpus,$i,TextGeneratorController::$nValue));
            if (!array_key_exists($prefix,TextGeneratorController::$nGrams)){
                $newSuffixEnd = array_slice(TextGeneratorController::$textCorpus,$i+TextGeneratorController::$nValue,1);
                // If word exists, add to output
                if (!($newSuffixEnd=="")){
                  TextGeneratorController::$nGrams[$prefix] = $newSuffixEnd;
              }

            } else{
                $newSuffixEnd = implode(array_slice(TextGeneratorController::$textCorpus,$i+TextGeneratorController::$nValue,1));
                // If word exists, add to output
                if (!($newSuffixEnd=="")){
                array_push(TextGeneratorController::$nGrams[$prefix],$newSuffixEnd);
              }
            }
        }
      }

      /**
       * Generate one paragraph of random text. Start by picking a random prefix to initialize.
       * For the remaining iterations repeat the following:
       *  - Pick a random suffix from the valid list for that prefix
       *  - Build the next prefix by removing the first word from the original prefix
       *    and adding the selected suffix
       */
      public function generateParagraph(){
          // Start paragraph in a random place.  Make first letter uppercase. Add prefix to output.
          $nextPrefix = array_rand(TextGeneratorController::$nGrams, 1);
          if (!($nextPrefix == " " || $nextPrefix == "")){
            TextGeneratorController::$textOutput = ucfirst($nextPrefix);
            TextGeneratorController::$textOutput= explode(" ",TextGeneratorController::$textOutput);
            $wordsGenerated = count(TextGeneratorController::$textOutput);// debug
          }

          // Select suffix from list of available values, update prefix and repeat
          // Get values from form or set default

          $wordsGenerated = 0;
            while($wordsGenerated <  TextGeneratorController::$wordsToGenerate){
              if (!array_key_exists($nextPrefix,TextGeneratorController::$nGrams)){
                $potentialSuffixes = array();
              } else{
                $potentialSuffixes = TextGeneratorController::$nGrams[$nextPrefix];
              }

              // Get next suffix. If none exist, try a new prefix
              if(count($potentialSuffixes)>= 1){
                $nextSuffixKey = array_rand($potentialSuffixes,1);
                $nextSuffix = $potentialSuffixes[$nextSuffixKey];
                // If word exists, add to output
                if (!($nextSuffix=="")){
                      array_push(TextGeneratorController::$textOutput,$nextSuffix);
                      $wordsGenerated = count(TextGeneratorController::$textOutput);
                    }
              }else {
                $wordsGenerated = count(TextGeneratorController::$textOutput);
                continue;
              }

              // Update prefix and repeat.  We explode/implode because the map expects a string as key
              $nextPrefix=explode(" ",$nextPrefix);
              array_push($nextPrefix,$nextSuffix);
              unset($nextPrefix[0]);
              $nextPrefix=implode(" ",$nextPrefix);
          }

          // End paragraph with "..."
          array_push(TextGeneratorController::$textOutput,"...");
      }

      /**
       *  Output paragraph.  Turn array into string and echo
       */
      public function printOutput(){
        TextGeneratorController::$textOutput = implode(" ",TextGeneratorController::$textOutput);
        // TextGeneratorController::$allParagraphs = TextGeneratorController::$allParagraphs."<p>".TextGeneratorController::$textOutput."</p>";
        TextGeneratorController::$allParagraphs = TextGeneratorController::$allParagraphs."<br>".TextGeneratorController::$textOutput;

      }

      /**
       * generateText:  This method is a wrapper that calls all the
       * different methods needed to generate the desired number of
       * paragraphs
       */
      public function generateText(TextGeneratorRequest $request)

      {
          TextGeneratorController::$wordsToGenerate=$request->input('wordsToGenerate',100);
          TextGeneratorController::$paragraphs=$request->input('paragraphs',3);
          TextGeneratorController::$content=$request->input('content','hamlet');
          $request->flash(); // This is cool! Send original values back to form

          TextGeneratorController::selectSource();

          TextGeneratorController::loadTextCorpus();
          TextGeneratorController::buildNGrams();
          for ($i = 0 ; $i < TextGeneratorController::$paragraphs; $i++){
            TextGeneratorController::generateParagraph();
            TextGeneratorController::printOutput();
        }

        $allParagraphs = TextGeneratorController::$allParagraphs;
        return view('textGenerator',compact('allParagraphs'));
      }
}
