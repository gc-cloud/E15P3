<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserGeneratorController extends Controller
{



public  function generateUser(){
  //  function generateUser($lastNames,){
   $lastNames = ['Smith','Perez','Castaneda','Buck', "Basch"];
   $firstNames = ["Pedro","Dave","Jerry","Sue","Adela"];
   $hobbies = ["Skiing","Music","Baseball", "Writing"];
   $photos = ["person1.jpg","person2.jpg","person3.jpg","person4.jpg","person5.jpg","person6.jpg","person7.jpg"
   ,"person8.jpg","person9.jpg","person10.jpg","person11.jpg","person12.jpg","person13.jpg","person14.jpg"];


    //$userData = [null];

    //Select random values
      $randomLastName= array_rand($lastNames);
      $randomFirstName = array_rand($firstNames);
      $randomHobby = array_rand($hobbies);
      $randomPhoto = array_rand($photos);

      //Build random user
      $fullName[] = $firstNames[$randomFirstName]. " ";
      $fullName[] = $lastNames[$randomLastName]. ". ";
      $hobby[] = $hobbies[$randomHobby].".";
      $photo = $photos[$randomPhoto];

      // Transfor array to string and return to view
      $fullName = implode($fullName);
      $hobby = implode($hobby);
    //  $photo = implode($photo);
    //  echo $fullName. "<br>" . $hobby;
      return view('userGenerator',
      compact('fullName','hobby','photo') );

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
