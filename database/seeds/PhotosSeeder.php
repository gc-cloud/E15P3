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

        array('id'=>1, 'path'=>'person1.jpg', 'gender'=>'F'),
        array('id'=>2, 'path'=>'person2.jpg', 'gender'=>'F'),
        array('id'=>3, 'path'=>'person3.jpg', 'gender'=>'F'),
        array('id'=>4, 'path'=>'person4.jpg', 'gender'=>'M'),
        array('id'=>5, 'path'=>'person5.jpg', 'gender'=>'F'),
        array('id'=>6, 'path'=>'person6.jpg', 'gender'=>'M'),
        array('id'=>7, 'path'=>'person7.jpg', 'gender'=>'F'),
        array('id'=>8, 'path'=>'person8.jpg', 'gender'=>'M'),
        array('id'=>9, 'path'=>'person9.jpg', 'gender'=>'M'),
        array('id'=>10, 'path'=>'person10.jpg', 'gender'=>'F'),
        array('id'=>11, 'path'=>'person11.jpg', 'gender'=>'M'),
        array('id'=>12, 'path'=>'person12.jpg', 'gender'=>'M'),
        array('id'=>13, 'path'=>'person13.jpg', 'gender'=>'M'),
        array('id'=>14, 'path'=>'person14.jpg', 'gender'=>'M'),

      ));
    }
}
