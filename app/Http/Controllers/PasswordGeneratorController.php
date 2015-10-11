<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordGeneratorRequest;
use App\Helpers\PasswordGeneratorData; // Class holding all the valid values


class PasswordGeneratorController extends Controller
{
  /*  Select random elements form a source
   * (for example: specialCharacters,numbers,wordCorpus) and then add the
   * elements to a destination (arguably the password array). If $camelCase is true then
   * each element start with an uppercase.  This function handles
   * the special cases of 1 element (not an array) and 0 elements (ignore)
   */
    private function addElements ($source, &$destination, $count, $camelCase)
    {
        if ($count==0) return; /* if no elements we do nothing */
        $randomKeys  = array_rand($source, $count);
        if (count($randomKeys) == 1){
          /* If only one element, array_rand returns an integer, not an array */
          ($camelCase=='true')? $destination[] = ucfirst($source[$randomKeys]) : $destination[] = $source[$randomKeys];
        } else {
          /* If elements <> 0,1 then we have an array of results */
          foreach ($randomKeys as $randomKey) {
            ($camelCase=='true')?  $destination[] = ucfirst($source[$randomKey]) :$destination[] = $source[$randomKey];
           }
        }
    }

    /**
     * Handle password generation for all methods
     */
    function generatePassword(PasswordGeneratorRequest $request)
    {
      /* Initialize password array.  This array will hold the values selected for special
       * characters, numbers and words*/
       $password = array();

      /* Use Laravel's request->input method to  get user defined values for number of words,
       * numbers and special characters, or set defaults. */
       $wordCount=$request->input('wordCount',3);
       $numberCount=$request->input('numberCount',1);
       $specialCharacterCount=$request->input('specialCharacterCount',1);
       $camelCase=$request->input('camelCase','false');

      /* Call the addElements function to select words, numbers and special characters */
        PasswordGeneratorController::addElements (PasswordGeneratorData::$wordCorpus, $password, $wordCount, $camelCase);
        PasswordGeneratorController::addElements (PasswordGeneratorData::$numbers, $password, $numberCount, $camelCase);
        PasswordGeneratorController::addElements (PasswordGeneratorData::$specialCharacters, $password, $specialCharacterCount, $camelCase);

       /* At this point, the $password array has a list of randomly selected
        * specialCharacters, numbers and words. However, they are in the order that the
        * elements were selected.  We use the shuffle function to scramble the elements
        * and then transform to a string with implode()
        */
        shuffle($password);
        $password = implode($password);
        $message = "Your new password is: ";
        $request->flash(); // Send original values back to form
        return view('passwordGenerator',compact('password','message'));
    }

    public function destroy($id)
    {
        //
    }
}
