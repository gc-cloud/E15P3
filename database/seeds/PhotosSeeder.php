<?php

use Illuminate\Database\Seeder;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('photos')->insert(array(
        array('path'=>'person1.jpg', 'gender'=>'F'),
        array('path'=>'person2.jpg', 'gender'=>'F'),
        array('path'=>'person3.jpg', 'gender'=>'F'),
        array('path'=>'person4.jpg', 'gender'=>'M'),
        array('path'=>'person5.jpg', 'gender'=>'F'),
        array('path'=>'person6.jpg', 'gender'=>'M'),
        array('path'=>'person7.jpg', 'gender'=>'F'),
        array('path'=>'person8.jpg', 'gender'=>'M'),
        array('path'=>'person9.jpg', 'gender'=>'M'),
        array('path'=>'person10.jpg', 'gender'=>'F'),
        array('path'=>'person11.jpg', 'gender'=>'M'),
        array('path'=>'person12.jpg', 'gender'=>'M'),
        array('path'=>'person13.jpg', 'gender'=>'M'),
        array('path'=>'person14.jpg', 'gender'=>'F'),
        array('path'=>'person15.jpg', 'gender'=>'F'),
        array('path'=>'person16.jpg', 'gender'=>'F'),
        array('path'=>'person17.jpg', 'gender'=>'F'),
        array('path'=>'person18.jpg', 'gender'=>'M'),
        array('path'=>'person19.jpg', 'gender'=>'M'),
        array('path'=>'person20.jpg', 'gender'=>'M'),

      ));
    }
}
