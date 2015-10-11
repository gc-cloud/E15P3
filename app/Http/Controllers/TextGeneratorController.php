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
      static $source;
      static $textCorpus;
      static $nGrams =array();

      public function printOutput(){
       echo TextGeneratorController::$textOutput;
      }

      /* Load text corpus, remove reduntant white space (use regular expressions to
       * replace redundant white space with single white space). Transform into array
       * so we can easily manipulate it.  Copy n-1 words to end of array to
       * handle edge cases*/
      public function loadTextCorpus(){
       /* Select source of textCorpus */
       TextGeneratorController::$source = TextGeneratorData::$beatles;
       // $source = TextGeneratorData::$cooking;
       //static $source = strip_tags(file_get_contents('http://dwa15.com/'),'<br>');

        TextGeneratorController::$textCorpus = trim((TextGeneratorController::$source));
        TextGeneratorController::$textCorpus = preg_replace('/\s++/', ' ',TextGeneratorController::$textCorpus);
        TextGeneratorController::$textCorpus = explode(" ",TextGeneratorController::$textCorpus);
        for($i = 0; $i < TextGeneratorController::$nValue; $i++){
          TextGeneratorController::$textCorpus[]=TextGeneratorController::$textCorpus[$i];
        }
      }

      /* Build nGram.  The nGram is a map of key => value pairs where each key (prefix)
       * is a string representing consecutive combinations of words with size
       * nValue and each value (suffix) is an array containing the valid words to follow each
       * prefix.  Valid words can be repeated in the array since we want to capture
       * the probability of occurrence.  To build, we find all prefixes, add suffix for each prefix.
       * The if-else initializes or updates the map */
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

      public function generateParagraph(){

      }
      public function generateText()
      {
          TextGeneratorController::loadTextCorpus();

          TextGeneratorController::buildNGrams();
          /* Generate random text. Start by picking a random prefix to initialize.  For
           * the remaining iterations repeat the following:
           *  - Pick a random suffix from the valid list for that prefix
           *  - Build the next prefix by removing the first word from the original prefix
           *    and adding the selected suffix
           */
           $nextPrefix = array_rand(TextGeneratorController::$nGrams, 1);
           TextGeneratorController::$textOutput = $nextPrefix;
           for($i=0 ; $i < TextGeneratorController::$wordsToGenerate - TextGeneratorController::$nValue; $i++){
             $potentialSuffixes = TextGeneratorController::$nGrams[$nextPrefix];
             $nextSuffixKey = array_rand($potentialSuffixes,1);
             $nextSuffix = $potentialSuffixes[$nextSuffixKey];
             $nextPrefix=explode(" ",$nextPrefix);
             array_push($nextPrefix,$nextSuffix);
             TextGeneratorController::$textOutput=explode(" ",TextGeneratorController::$textOutput);
             array_push(TextGeneratorController::$textOutput,$nextSuffix);
             TextGeneratorController::$textOutput = implode(" ",TextGeneratorController::$textOutput);
             unset($nextPrefix[0]);
            $nextPrefix=implode(" ",$nextPrefix);
           }

           /* Output resultl to screen */
            TextGeneratorController::printOutput();

      }


    public function destroy($id)
    {
        //
    }
}
