<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordGeneratorRequest;
use App\helpers\PasswordGeneratorData; // Data class


class PasswordGeneratorController extends Controller
{
  /* Create a generic function to select random elements form a source
  (for example: specialCharacters,numbers,wordCorpus) and then add the
  elements to a destination (arguably the password array). If $camelCase is true then
  each element start with an uppercase.  Finally, this function handles
  the special cases of 1 element (not an array) and 0 elements (ignore)*/

  public function addElements ($source, &$destination, $count, $camelCase){
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

  /* This function outputs the proposed password to the terminal. It is designed to
  be called by the form using it */
/*  public  function printPassword($an_Array){
          foreach ($an_Array as $key=>$value){
            echo $value ;
          }
      }*/

    /**
     * Handle page load through get
     *
     */
    public function getIndex()
    {

      return view('passwordGenerator');

    }

    /**
     * Handle page load through post
     *
     */
    public function postIndex()
    {
        return view('passwordGenerator');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(PasswordGeneratorRequest $request)
    {

      /* Initialize password array.  This array will hold the values selected for special
      characters, numbers and words*/
      $password = array();

      /* If set, get user defined values for number of words, numbers and
      special characters, otherwise set defaults. These values are used to set sticky
      fields in the submitting forms*/

      /*public $numberCount = $request->get('numberCount');
      isset($_POST['wordCount'])? $wordCount = $_POST['wordCount']:$wordCount= 4;
          isset($_POST['specialCharacterCount'])? $specialCharacterCount = $_POST['specialCharacterCount']:$specialCharacterCount= 1;
          !isset($_POST['camelCase'])? $camelCase="false":$camelCase="true";
      */
       $numberCount = $request->get('numberCount');
       $wordCount = $request->get('wordCount');
       $specialCharacterCount = $request->get('specialCharacterCount');
       $camelCase=$request->get('camelCase');
/*
      $message='Your new password is: ';
      $newPassword= $password;
      $name= 'Gerardo';
      return view('passwordGenerator', compact('message','newPassword','name'));
*/
    //  return 'this is store';
    /* Call the addElements function to select words, numbers and special characters */
      PasswordGeneratorController::addElements (PasswordGeneratorData::$wordCorpus, $password,$wordCount, $camelCase);
      PasswordGeneratorController::addElements (PasswordGeneratorData::$numbers, $password,$numberCount, $camelCase);
      PasswordGeneratorController::addElements (PasswordGeneratorData::$specialCharacters, $password,$specialCharacterCount, $camelCase);

    /* At this point, the $password array has a list of randomly selected
    specialCharacters, numbers and words. However, they are in the order that the
    elements were selected.  We use the shuffle function to scramble the elements*/
      shuffle($password);
      $newPassword = implode($password);
      $message = "Your new password is: ";
      return view('passwordGenerator',
      compact('newPassword','password','message','numberCount','wordCount','specialCharacterCount','camelCase'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
