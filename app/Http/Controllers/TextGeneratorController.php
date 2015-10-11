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
     * Handle page load through get
     *
     */
    public function generateText()
    {
       /* Define parameters: n value (windowSize), number of words to generate */
        $nValue = 3;
        $wordsToGenerate = 285;
        $paragraphs= 3;

        /* Load text corpus, remove white space, transform into array*/
        $textCorpus = trim((TextGeneratorData::$cooking)); //remove whitespace
        $textCorpus = preg_replace('/\s++/', ' ',$textCorpus);// remove redundant spaces
        $textCorpus = explode(" ",$textCorpus);// make array


        /* Prepare corpus for analysis.
         * - Count words in original text,
         * - copy n-1 words to end of array to handle edge cases
         * - determine number of words to generate
         */
        $wordsInCorpus = count($textCorpus);
    //    echo " Words in corpus: ".$wordsInCorpus;// Debug
        for($i = 0; $i < $nValue; $i++){
          $textCorpus[]=$textCorpus[$i];
        }
  //      echo " New count including repeated window: ". count($textCorpus);// Debug
        // add code to get number of words to generate. Min n, max wordsInCorpus

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

        for ($i= 0; $i < $wordsInCorpus; $i++){

            // get new prefix of size nValue
            $prefix = implode(" ",array_slice($textCorpus,$i,$nValue));


          /* Build nGram.  The nGram is a map of key=> value pairs where each key
          is a string representing consecutive combinations of words with size
          nValue and each value is an array containing the valid suffixes for each
          prefix.  Valid words can be repeated in the array since we want to capture
          the probability of occurrence.  The if-else  serves to initialize the
          map or update it if a key has been used before*/
          if (!array_key_exists($prefix,$nGrams)){
          //    echo "<br>No previous suffix";
              $newSuffixEnd = array_slice($textCorpus,$i+$nValue,1);
              $nGrams[$prefix] = $newSuffixEnd;
          } else{
        //      echo "<br>Previous suffix is: ".implode(" ",$nGrams[$prefix]);
              $newSuffixEnd = implode(array_slice($textCorpus,$i+$nValue,1));
          //    echo "<br>New suffix end is: ".$newSuffixEnd;
              array_push($nGrams[$prefix],$newSuffixEnd);
        //      echo "<br>New suffix is: ". implode(" ",$nGrams[$prefix]);

              //add new suffix to previous list
              //$nGrams[$prefix] = $newSuffix;// update nGram the key is a string and the value is an array of suffixes
          }

        //  echo "<br> Prefix [".$i."] is: ".$prefix."<br>";
        //  echo "Suffix is :" . implode(" ",$nGrams[$prefix])."<br>";

        }


        /* Generate random text.
         * - Pick a random prefix to initialize
         * - For the remaining iterations repeat the following:
         *   - Pick a random suffix from the valid list for that prefix
         *   - Build the next prefix by removing the first word from the original prefix
         *     and adding the selected suffix
         */
         $nextPrefix = array_rand($nGrams, 1);
         $randomText = $nextPrefix;
      //   echo "Selected initial prefix is: ". $nextPrefix."<br>";
         for($i=0 ; $i < $wordsToGenerate - $nValue; $i++){

           $potentialSuffixes = $nGrams[$nextPrefix];
      //     echo "Potential Suffixes are: ". implode(" ",$potentialSuffixes)."<br>";
           $nextSuffixKey = array_rand($potentialSuffixes,1);
           $nextSuffix = $potentialSuffixes[$nextSuffixKey];
        //   echo "Next Suffix is: ". $nextSuffix."<br>";
           /* Update Prefix.
           * - Convert string to array
           * - Push next word
           * - Delete first word
           * - Convert back to string*/
           $nextPrefix=explode(" ",$nextPrefix);
           array_push($nextPrefix,$nextSuffix);
           $randomText=explode(" ",$randomText);
           array_push($randomText,$nextSuffix);
           $randomText = implode(" ",$randomText);
           unset($nextPrefix[0]);
          $nextPrefix=implode(" ",$nextPrefix);
          // echo "Next prefix is: ".$nextPrefix."<br>";



         }
          echo "The final random text is:<br>".$randomText;

        /* Get ready to output randomText, start by transforming array to string */
        $randomText = implode($textCorpus); // Make string from array



        //return view('textGenerator',compact('randomText'));
    }


    public function destroy($id)
    {
        //
    }
}
