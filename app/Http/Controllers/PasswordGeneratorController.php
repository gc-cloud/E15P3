<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordGeneratorRequest;
use App\Helpers\PasswordGeneratorData; // Data class


class PasswordGeneratorController extends Controller
{

   /* Methods
    * ------------------------------------------------------------------------------*/
  /* Create a generic method to select random elements form a source
   * (for example: specialCharacters,numbers,wordCorpus) and then add the
   * elements to a destination (arguably the password array). If $camelCase is true then
   * each element start with an uppercase.  Finally, this function handles
   * the special cases of 1 element (not an array) and 0 elements (ignore)
   */
    public function addElements ($source, &$destination, $count, $camelCase)
    {
        if ($count==0) return; /* if no elements we do nothing */
        $randomKeys  = array_rand($source, $count);
        if (count($randomKeys) == 1){
          /* If only one element, array_rand returns an integer, not an array */
          ($camelCase=="true")? $destination[] = ucfirst($source[$randomKeys]) : $destination[] = $source[$randomKeys];
        } else {
          /* If elements <> 0,1 then we have an array of results */
          foreach ($randomKeys as $randomKey) {
            ($camelCase=="true")?  $destination[] = ucfirst($source[$randomKey]) :$destination[] = $source[$randomKey];
           }
        }
    }

    /**
     * Handle password generation for all methods
     */
    public function generatePassword(PasswordGeneratorRequest $request)
    {

      /* Initialize password array.  This array will hold the values selected for special
       * characters, numbers and words*/
       $password = array();

      /* If set, get user defined values for number of words, numbers and
       * special characters, otherwise set defaults. These values are used to set sticky
       * fields in the submitting forms*/
       !empty($request->get('wordCount'))? $wordCount = $request->get('wordCount'):$wordCount= 3;
       !empty($request->get('numberCount'))? $numberCount = $request->get('numberCount'):$numberCount= 1;
       !empty($request->get('specialCharacterCount'))? $specialCharacterCount = $request->get('specialCharacterCount'):$specialCharacterCount= 1;
       !empty($request->get('camelCase'))? $camelCase = $request->get('camelCase'):$camelCase= "true";


      /* Call the addElements function to select words, numbers and special characters */
        PasswordGeneratorController::addElements (PasswordGeneratorData::$wordCorpus, $password,$wordCount, $camelCase);
        PasswordGeneratorController::addElements (PasswordGeneratorData::$numbers, $password,$numberCount, $camelCase);
        PasswordGeneratorController::addElements (PasswordGeneratorData::$specialCharacters, $password,$specialCharacterCount, $camelCase);

       /* At this point, the $password array has a list of randomly selected
        * specialCharacters, numbers and words. However, they are in the order that the
        * elements were selected.  We use the shuffle function to scramble the elements
        * and then transform to a string with implode()
        */
        shuffle($password);
        $password = implode($password);
        $message = "Your new password is: ";
        return view('passwordGenerator',
        compact('password','message','numberCount','wordCount','specialCharacterCount','camelCase'));
    }
}
