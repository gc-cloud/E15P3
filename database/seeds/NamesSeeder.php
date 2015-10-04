<?php

use Illuminate\Database\Seeder;

class NamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('names')->insert(array(
          array('id'=>1, 'name'=>'Stephen'),
          array('id'=>2, 'name'=>'Jody'),
          array('id'=>3, 'name'=>'John'),
          array('id'=>4, 'name'=>'Jeff'),
          array('id'=>5, 'name'=>'Matt'),
          array('id'=>6, 'name'=>'Dan'),
          array('id'=>7, 'name'=>'Eljen'),
          array('id'=>8, 'name'=>'Gerardo'),
          array('id'=>9, 'name'=>'Shannon'),
          array('id'=>10, 'name'=>'Sandy'),
          array('id'=>11, 'name'=>'Lindsay'),
          array('id'=>12, 'name'=>'David'),
          array('id'=>13, 'name'=>'Robin'),
          array('id'=>14, 'name'=>'Melissa'),
          array('id'=>15, 'name'=>'Olinda'),

        ));
    }
}
