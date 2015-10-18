<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hobby;
use App\Name;
use App\Photo;
use App\Surname;
use App\User;
use App\Email_provider;

class UserGeneratorController extends Controller
{

public  function generateUser(){
      // Set random seed.
      mt_srand();;

    // Pick a birth date between 35 and 25 years ago
    $daysAgoMax = -35*365;
    $daysAgoMin = -25*365;
    $birthDate =  date('Y-m-d', strtotime( '+'.mt_rand((int) $daysAgoMax,(int) $daysAgoMin).' days'));

    /* Select random values from MySQL database to generate
     * a user.  To maintain gender consistency between names an
     * photos, we get the g
     */
      $hobbyKey = mt_rand(1,Hobby::count());
      $hobby = Hobby::find($hobbyKey)->hobby;

      $surnameKey = mt_rand(1,Surname::count());
      $surname = Surname::find($surnameKey)->surname;

      $nameKey = mt_rand(1,Name::count());
      $name = Name::find($nameKey)->name;
      $gender = Name::find($nameKey)->gender;

      // $photo:  select a random photo that is consistent with the name gender
      $photo = Photo::orderByRaw('RAND()')->where('gender',$gender)->take(1)->get();
      $photo = $photo->get(0)->path;

      $emailKey = mt_rand(1,Email_provider::count());
      $emailProvider = Email_provider::find($emailKey)->email_provider;
      $email = strtolower($name.".".$surname."&#64;".$emailProvider);

      // Pass values to view
      return view('userGenerator',
      compact('fullName','hobby','photo','birthDate','hobby','name', 'surname','email') );
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
