<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TextGeneratorRequest;
use App\Helpers\TextGeneratorData; // Class holding all the valid values

class TextGeneratorController extends Controller
{

    /**
     * Set shared variables and default values
     */
      static $textOutput;
      static $wordsToGenerate = 250;
      static $paragraphs= 3;
      static $nValue = 10;
      static $source;
      static $textCorpus;
      static $nGrams =array();

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
                // preg_replace('/\s++/', ' ',$text); // remove redundant white space
            return trim(strip_tags( $text ));
        }



      /**
       * Load text corpus. Stript html tags. Remove reduntant white space . Transform into array
       * so we can easily manipulate it.  Copy n-1 words to end of array to
       * handle edge cases
       */
      public function loadTextCorpus(){
        $content = "beatles";
        switch ($content){
          case "smallText":
            TextGeneratorController::$source = TextGeneratorData::$smallText;
            break;
          case "beatles":
            TextGeneratorController::$source = TextGeneratorData::$beatles;
            break;
          case "cooking":
            TextGeneratorController::$source = TextGeneratorData::$cooking;
            break;
          case "harvardSongs":
            TextGeneratorController::$source = TextGeneratorData::$harvardSongs;
            break;
          case "ladyGaga":
            TextGeneratorController::$source = TextGeneratorData::$ladyGaga;
            break;
          case "url":
            TextGeneratorController::$source = file_get_contents('http://dwa15.com/','<br>');
            break;
          case "hamlet":
            TextGeneratorController::$source = readfile('hamlet.txt');
            break;
        }
        // Sanitize text
        TextGeneratorController::$textCorpus = TextGeneratorController::strip_html_tags(TextGeneratorController::$source);

        // Copy n words to the end to handle 'wrap-around' edge case
        TextGeneratorController::$textCorpus = explode(" ",TextGeneratorController::$textCorpus);
        echo "Original word count: ". count(TextGeneratorController::$textCorpus)."<br>";
        for($i = 0; $i < TextGeneratorController::$nValue; $i++){
          TextGeneratorController::$textCorpus[]=TextGeneratorController::$textCorpus[$i];
        }
        echo "Extended word count: ". count(TextGeneratorController::$textCorpus)."<br>";
      }

      /**
       * Build nGram.  The nGram is a map of key => value pairs where each key (prefix)
       * is a string representing consecutive combinations of words with size
       * nValue and each value (suffix) is an array containing the valid words to follow each
       * prefix.  Valid words can be repeated in the array since we want to capture
       * the probability of occurrence.  To build, we find all prefixes, add suffix for each prefix.
       * The if-else initializes or updates the map
       */
      public function buildNGrams(){
          $wordsInCorpus = count(TextGeneratorController::$textCorpus);
        for ($i= 0; $i < $wordsInCorpus; $i++){
            $prefix = implode(" ",array_slice(TextGeneratorController::$textCorpus,$i,TextGeneratorController::$nValue));
            if (!array_key_exists($prefix,TextGeneratorController::$nGrams)){
                $newSuffixEnd = array_slice(TextGeneratorController::$textCorpus,$i+TextGeneratorController::$nValue,1);
                TextGeneratorController::$nGrams[$prefix] = $newSuffixEnd;
            } else{
                $newSuffixEnd = implode(array_slice(TextGeneratorController::$textCorpus,$i+TextGeneratorController::$nValue,1));
                array_push(TextGeneratorController::$nGrams[$prefix],$newSuffixEnd);
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
          //Start paragraph in a random place.  Make first letter uppercase
          $nextPrefix = array_rand(TextGeneratorController::$nGrams, 1);
          TextGeneratorController::$textOutput = ucfirst($nextPrefix);
          TextGeneratorController::$textOutput=explode(" ",TextGeneratorController::$textOutput);

          // Select suffix from list of available values, update prefix and repeat
          for($i=0 ; $i < TextGeneratorController::$wordsToGenerate - TextGeneratorController::$nValue; $i++){
            if (!array_key_exists($nextPrefix,TextGeneratorController::$nGrams)){
              $potentialSuffixes = array();
            } else{
              $potentialSuffixes = TextGeneratorController::$nGrams[$nextPrefix];
            }

            // Get next suffix. If none exist, try a new prefix
            if(count($potentialSuffixes)>= 1){
              $nextSuffixKey = array_rand($potentialSuffixes,1);
              $nextSuffix = $potentialSuffixes[$nextSuffixKey];
              array_push(TextGeneratorController::$textOutput,$nextSuffix);
            } else {
              $i--;
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
      public function printOutput(&$textOutput){
        $textOutput = implode(" ",$textOutput);
        echo "<p>".$textOutput."</p>";
      }

      /**
       * generateText:  This method is a wrapper that calls all the
       * different methods needed to generate the desired number of
       * paragraphs
       */
      public function generateText()
      {
          TextGeneratorController::loadTextCorpus();
          TextGeneratorController::buildNGrams();

          for ($i = 0 ; $i < TextGeneratorController::$paragraphs; $i++){
            TextGeneratorController::generateParagraph();
            TextGeneratorController::printOutput(TextGeneratorController::$textOutput);
        }
      }


    public function destroy($id)
    {
        //
    }
}
