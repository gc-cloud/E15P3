<?php

use Illuminate\Database\Seeder;

class SurnamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('surnames')->insert(array(
        array('id'=>1, 'surname'=>'Castaneda'),
        array('id'=>2, 'surname'=>'Buck'),
        array('id'=>3, 'surname'=>'O\'Brien'),
        array('id'=>4, 'surname'=>'Vendell'),
        array('id'=>5, 'surname'=>'Chock'),
        array('id'=>6, 'surname'=>'Sanches'),
        array('id'=>7, 'surname'=>'Chong'),
        array('id'=>8, 'surname'=>'McKinsel'),
        array('id'=>9, 'surname'=>'Armang'),
        array('id'=>10, 'surname'=>'Warhol'),
        array('id'=>11, 'surname'=>'Picasso'),
        array('id'=>12, 'surname'=>'Adenarts'),
        array('id'=>13, 'surname'=>'Kskmanyksny'),
        array('id'=>14, 'surname'=>'Artersan'),
        array('id'=>15, 'surname'=>'Hall'),
        array('id'=>16, 'surname'=>'King'),
        array('id'=>17, 'surname'=>'Robinson'),
        array('id'=>18, 'surname'=>'Sanchez'),
        array('id'=>19, 'surname'=>'Freshhour'),
        array('id'=>20, 'surname'=>'Collins'),
        array('id'=>21, 'surname'=>'Rogerson'),
        array('id'=>22, 'surname'=>'Ortiz'),
        array('id'=>23, 'surname'=>'Hamilton'),
        array('id'=>24, 'surname'=>'Wells'),
        array('id'=>25, 'surname'=>'Webb'),
        array('id'=>26, 'surname'=>'Tucker'),
        array('id'=>27, 'surname'=>'Freedman'),
        array('id'=>28, 'surname'=>'Snyder'),
        array('id'=>29, 'surname'=>'Potter'),
        array('id'=>30, 'surname'=>'Grange'),
        array('id'=>31, 'surname'=>'Walker'),
        array('id'=>32, 'surname'=>'Perez'),
        array('id'=>33, 'surname'=>'Lewis'),
        array('id'=>34, 'surname'=>'Wilson'),
        array('id'=>35, 'surname'=>'Davis'),
      ));
    }
}
