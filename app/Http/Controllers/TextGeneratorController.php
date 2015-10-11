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
     *
     */
     static $textOutput;
     static $wordsToGenerate = 10;
     static $paragraphs= 3;
     static $nValue = 3;
     // $source = TextGeneratorData::$cooking;
      //static $source = strip_tags(file_get_contents('http://dwa15.com/'),'<br>');


     public function printOutput(){
         echo "The final random text is:<br>".TextGeneratorController::$textOutput;
     }

    public function generateText()
    {

       $source = TextGeneratorData::$beatles;

        /* Load text corpus, remove reduntant white space, transform into array
         * so we can easily manipulate it. We use regular expressions to replace
         * redundant white space with single white space.*/
        $textCorpus = trim(($source));
        $textCorpus = preg_replace('/\s++/', ' ',$textCorpus);
        $textCorpus = explode(" ",$textCorpus);


        /* Prepare corpus for analysis.
         * - Count words in original text,
         * - copy n-1 words to end of array to handle edge cases
         * - determine number of words to generate
         */
        $wordsInCorpus = count($textCorpus);
        for($i = 0; $i < TextGeneratorController::$nValue; $i++){
          $textCorpus[]=$textCorpus[$i];
        }

        /* Build nGram.  Find all prefixes, add suffix for each prefix.
         * - find prefix
         * - make prefix string
         * - find previous suffixes array for prefix
         * - add suffix to suffexes array
         * - update key(prefix string)=> value(array of suffixes)
        */
        $numberOfPrefixes = 0;
        /*Debug: Show words
        echo "<br>";
        foreach ($textCorpus as $word) {
          echo $word."<br>";
        }*/

        //Show prefixes
        $nGrams= array();

        /* Build nGram.  The nGram is a map of key=> value pairs where each key (prefix)
         * is a string representing consecutive combinations of words with size
         * nValue and each value (suffix) is an array containing the valid words to follow each
         * prefix.  Valid words can be repeated in the array since we want to capture
         * the probability of occurrence.  The if-else initializes or updates the
         * map*/
        for ($i= 0; $i < $wordsInCorpus; $i++){
            $prefix = implode(" ",array_slice($textCorpus,$i,TextGeneratorController::$nValue));
            if (!array_key_exists($prefix,$nGrams)){
                $newSuffixEnd = array_slice($textCorpus,$i+TextGeneratorController::$nValue,1);
                $nGrams[$prefix] = $newSuffixEnd;
            } else{
                $newSuffixEnd = implode(array_slice($textCorpus,$i+TextGeneratorController::$nValue,1));
                array_push($nGrams[$prefix],$newSuffixEnd);
            }
        }


        /* Generate random text. Start by picking a random prefix to initialize.  For
         * the remaining iterations repeat the following:
         *  - Pick a random suffix from the valid list for that prefix
         *  - Build the next prefix by removing the first word from the original prefix
         *    and adding the selected suffix
         */
         $nextPrefix = array_rand($nGrams, 1);
         $randomText = $nextPrefix;
         for($i=0 ; $i < TextGeneratorController::$wordsToGenerate - TextGeneratorController::$nValue; $i++){
           $potentialSuffixes = $nGrams[$nextPrefix];
           $nextSuffixKey = array_rand($potentialSuffixes,1);
           $nextSuffix = $potentialSuffixes[$nextSuffixKey];
           $nextPrefix=explode(" ",$nextPrefix);
           array_push($nextPrefix,$nextSuffix);
           $randomText=explode(" ",$randomText);
           array_push($randomText,$nextSuffix);
           $randomText = implode(" ",$randomText);
           unset($nextPrefix[0]);
          $nextPrefix=implode(" ",$nextPrefix);
         }

         /* Get ready to output randomText, start by transforming array to string */
          TextGeneratorController::$textOutput = $randomText;
          //echo "The final random text is:<br>".$randomText;
          TextGeneratorController::printOutput();


        $randomText = implode($textCorpus); // Make string from array

        //return view('textGenerator',compact('randomText'));
    }


    public function destroy($id)
    {
        //
    }
}
