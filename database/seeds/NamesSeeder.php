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
          array('id'=>1, 'name'=>'Stephen', 'gender'=>'M'),
          array('id'=>2, 'name'=>'Laura', 'gender'=>'F'),
          array('id'=>3, 'name'=>'Anna', 'gender'=>'F'),
          array('id'=>4, 'name'=>'Claudia', 'gender'=>'F'),
          array('id'=>5, 'name'=>'Matt', 'gender'=>'M'),
          array('id'=>6, 'name'=>'Dan', 'gender'=>'M'),
          array('id'=>7, 'name'=>'Eljen', 'gender'=>'M'),
          array('id'=>8, 'name'=>'Gerardo', 'gender'=>'M'),
          array('id'=>9, 'name'=>'Shannon', 'gender'=>'F'),
          array('id'=>10, 'name'=>'Sandy', 'gender'=>'F'),
          array('id'=>11, 'name'=>'Lindsay', 'gender'=>'F'),
          array('id'=>12, 'name'=>'David', 'gender'=>'M'),
          array('id'=>13, 'name'=>'Robin', 'gender'=>'F'),
          array('id'=>14, 'name'=>'Melissa', 'gender'=>'F'),
          array('id'=>15, 'name'=>'Olinda', 'gender'=>'F'),
          array('id'=>16, 'name'=>'Sue', 'gender'=>'F'),
          array('id'=>17, 'name'=>'Adela', 'gender'=>'F'),
          array('id'=>18, 'name'=>'Sophia', 'gender'=>'F'),
          array('id'=>19, 'name'=>'Emma', 'gender'=>'F'),
          array('id'=>20, 'name'=>'Olivia', 'gender'=>'F'),
          array('id'=>21, 'name'=>'Mia', 'gender'=>'F'),
          array('id'=>22, 'name'=>'Zoe', 'gender'=>'F'),
          array('id'=>23, 'name'=>'Lily', 'gender'=>'F'),
          array('id'=>24, 'name'=>'Emily', 'gender'=>'F'),
          array('id'=>25, 'name'=>'Aubrey', 'gender'=>'F'),
          array('id'=>26, 'name'=>'Kay', 'gender'=>'F'),
          array('id'=>27, 'name'=>'Ella', 'gender'=>'F'),
          array('id'=>28, 'name'=>'Nora', 'gender'=>'F'),
          array('id'=>29, 'name'=>'Grace', 'gender'=>'F'),
          array('id'=>30, 'name'=>'Rose', 'gender'=>'F'),
          array('id'=>31, 'name'=>'Sarah', 'gender'=>'F'),
          array('id'=>32, 'name'=>'Vicky', 'gender'=>'F'),
          array('id'=>33, 'name'=>'Maria', 'gender'=>'F'),
          array('id'=>34, 'name'=>'Eva', 'gender'=>'F'),
          array('id'=>35, 'name'=>'Bella', 'gender'=>'F'),
          array('id'=>36, 'name'=>'Sydney', 'gender'=>'F'),
          array('id'=>37, 'name'=>'Hermione', 'gender'=>'F'),
          array('id'=>38, 'name'=>'Pedro', 'gender'=>'M'),
          array('id'=>39, 'name'=>'Dave', 'gender'=>'M'),
          array('id'=>40, 'name'=>'John', 'gender'=>'M'),
          array('id'=>41, 'name'=>'Tim', 'gender'=>'M'),
          array('id'=>42, 'name'=>'Matt', 'gender'=>'M'),
          array('id'=>43, 'name'=>'Paul', 'gender'=>'M'),
          array('id'=>44, 'name'=>'Chris', 'gender'=>'M'),
          array('id'=>45, 'name'=>'Daniel', 'gender'=>'M'),
          array('id'=>46, 'name'=>'Liam', 'gender'=>'M'),
          array('id'=>47, 'name'=>'Noah', 'gender'=>'M'),
          array('id'=>48, 'name'=>'Ethan', 'gender'=>'M'),
          array('id'=>49, 'name'=>'Luke', 'gender'=>'M'),
          array('id'=>50, 'name'=>'Mike', 'gender'=>'M'),
          array('id'=>51, 'name'=>'Alexander', 'gender'=>'M'),
          array('id'=>52, 'name'=>'James', 'gender'=>'M'),
          array('id'=>53, 'name'=>'Michael', 'gender'=>'M'),
          array('id'=>54, 'name'=>'Connor', 'gender'=>'M'),
          array('id'=>55, 'name'=>'Martin', 'gender'=>'M'),
          array('id'=>56, 'name'=>'Edelmiro', 'gender'=>'M'),
          array('id'=>57, 'name'=>'Gabriel', 'gender'=>'M'),
          array('id'=>58, 'name'=>'Ramiro', 'gender'=>'M'),
          array('id'=>59, 'name'=>'Victor', 'gender'=>'M'),
          array('id'=>60, 'name'=>'David', 'gender'=>'M'),
          array('id'=>61, 'name'=>'Jason', 'gender'=>'M'),
          array('id'=>62, 'name'=>'Harry', 'gender'=>'M'),
        ));
    }
}
