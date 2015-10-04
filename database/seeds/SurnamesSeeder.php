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
        array('id'=>1, 'name'=>'Castaneda'),
        array('id'=>2, 'name'=>'Buck'),
        array('id'=>3, 'name'=>'O\'Brien'),
        array('id'=>4, 'name'=>'Vendell'),
        array('id'=>5, 'name'=>'Chock'),
        array('id'=>6, 'name'=>'Sanches'),
        array('id'=>7, 'name'=>'Chong'),
        array('id'=>8, 'name'=>'McKinsel'),
        array('id'=>9, 'name'=>'Armang'),
        array('id'=>10, 'name'=>'Blahlol'),
        array('id'=>11, 'name'=>'Lolblah'),
        array('id'=>12, 'name'=>'Adenarts'),
        array('id'=>13, 'name'=>'Kskmanyksny'),
        array('id'=>14, 'name'=>'Artersan'),
        array('id'=>15, 'name'=>'Geckowsky'),

      ));
    }
}
