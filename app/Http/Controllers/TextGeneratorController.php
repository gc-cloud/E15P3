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
        $nValue = 5;
        $wordsToGenerate = 50;
        $paragraphs= 3;

        /* Load text corpus, remove white space, transform into array*/
        $textCorpus = trim((TextGeneratorData::$hamlet)); //remove whitespace
        $textCorpus = preg_replace('/\s++/', ' ',$textCorpus);// remove redundant spaces
        $textCorpus = explode(" ",$textCorpus);// make array


        /* Prepare corpus for analysis.
        - Count words in original text,
        - copy n-1 words to end of array to handle edge cases
        - determine number of words to generate */
        $wordsInCorpus = count($textCorpus);
        echo " Words in corpus: ".$wordsInCorpus;// Debug
        for($i = 0; $i < $nValue; $i++){
          $textCorpus[]=$textCorpus[$i];
        }
        echo " New count including repeated window: ". count($textCorpus);// Debug
        // add code to get number of words to generate. Min n, max wordsInCorpus

        /* Build nGram.  Find all prefixes, add suffix for each prefix.
        - find prefix
        - make prefix string
        - find previous suffixes array for prefix
        - add suffix to suffexes array
        - update key(prefix string)=> value(array of suffixes)
        */
        $numberOfPrefixes = 0;
        //Debug: Show words
        echo "<br>";
        foreach ($textCorpus as $word) {
          echo $word."<br>";
        }
        //Show suffixes
        // for ($i= 0; $i < $wordsInCorpus; $i++){
        //   $suffix = array_slice($textCorpus,$i,$nValue);
        //   echo "Suffix [".$i."] is: ".implode($suffix)."<br>";
        // }



        /* Get ready to output randomText, start by transforming array to string */
        $randomText = implode($textCorpus); // Make string from array



        //return view('textGenerator',compact('randomText'));
    }


    public function destroy($id)
    {
        //
    }
}
