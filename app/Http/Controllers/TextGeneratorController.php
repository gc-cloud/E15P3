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
       //$loremIpsum = "Lorem ipsum dolor sit amet, co";
        $loremIpsum = TextGeneratorData::$hamlet;
        $allWords = str_split($loremIpsum);// Make array from string
        $randomText = implode($allWords); // Make string from array

        return view('textGenerator',compact('randomText'));
    }


    public function destroy($id)
    {
        //
    }
}
