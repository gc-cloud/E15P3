<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserGeneratorController extends Controller
{



public  function generateUser(){
  //  function generateUser($lastNames,){
      $lastNames = ["Smith","Perez","Castaneda","Buck", "Basch","Williams","Jones","Davis","Wilson","Lewis","Perez","Walker",
      "Hall","King","Robinson","Sanchez","Freshhour","Collins","Rogers","Ortiz","Hamilton","Wells","Webb","Tucker","Freedman",
      "Snyder","Potter","Grange"];
      $hobbies = ["Skiing","Music","Baseball", "Writing"];
      $firstNamesMales = ["Pedro","Dave","John","Tim","Matt","Paul","Chris", "Daniel","Liam","Noah","Ethan","Luke",
      "Mike","John","Alexander","James","Michael","Connor","Martin","Edelmiro","Gabriel","Ramiro","Victor","David","Jason","Harry"];
      $firstNamesFemales = ["Sue","Adela","Sophia","Emma","Olivia", "Mia","Zoe","Lily","Emily","Aubrey","Kay",
      "Ella", "Nora","Grace","Rose","Sarah","Vicky","Maria","Eva","Bellissima","Sydney","Hermione"];
      $photosMales = ["person4.jpg","person6.jpg", "person8.jpg","person9.jpg","person11.jpg","person12.jpg","person13.jpg","person14.jpg"];
      $photosFemales = ["person1.jpg","person2.jpg","person3.jpg","person5.jpg","person7.jpg","person10.jpg"];


    //$userData = [null];

    //Select random values.  Pick a random key and then the value for the key.
      $lastName= $lastNames[array_rand($lastNames)];
      $hobby = $hobbies[array_rand($hobbies)];
      // Male or female name and photo. Set a seed and then select base on random 0-1 value.
      mt_srand();;
      if (mt_rand(0,1)) {
        $firstName = $firstNamesMales[array_rand($firstNamesMales)];
        $photo = $photosMales[array_rand($photosMales)];
      } else{
        $firstName = $firstNamesFemales[array_rand($firstNamesFemales)];
        $photo = $photosFemales[array_rand($photosFemales)];
    }
    //Pick a date between 30 and 20 years ago (-10,000  and - 7,000 days)
    $birthDate =  date('Y-m-d', strtotime( '+'.mt_rand(-10950,-7300).' days'));
      //Build composite user name and last name
      $fullName[] = $firstName. " ";
      $fullName[] = $lastName. ".";

      // Transfor array to string and return to view
      $fullName = implode($fullName);
      //$hobby = implode($hobby);
    //  $photo = implode($photo);
    //  echo $fullName. "<br>" . $hobby;
      return view('userGenerator',
      compact('fullName','hobby','photo','birthDate') );

  }
  /**
   * Handle page load through get
   *
   */
    public function getIndex()
    {
        return view('userGenerator');
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
    public function store(Request $request)
    {
        //
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
