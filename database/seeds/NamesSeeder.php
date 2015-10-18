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
          array('name'=>'Stephen', 'gender'=>'M'),
          array('name'=>'Laura', 'gender'=>'F'),
          array('name'=>'Anna', 'gender'=>'F'),
          array('name'=>'Claudia', 'gender'=>'F'),
          array('name'=>'Matt', 'gender'=>'M'),
          array('name'=>'Dan', 'gender'=>'M'),
          array('name'=>'Eljen', 'gender'=>'M'),
          array('name'=>'Gerardo', 'gender'=>'M'),
          array('name'=>'Shannon', 'gender'=>'F'),
          array('name'=>'Sandy', 'gender'=>'F'),
          array('name'=>'Lindsay', 'gender'=>'F'),
          array('name'=>'David', 'gender'=>'M'),
          array('name'=>'Robin', 'gender'=>'F'),
          array('name'=>'Melissa', 'gender'=>'F'),
          array('name'=>'Olinda', 'gender'=>'F'),
          array('name'=>'Sue', 'gender'=>'F'),
          array('name'=>'Adela', 'gender'=>'F'),
          array('name'=>'Sophia', 'gender'=>'F'),
          array('name'=>'Emma', 'gender'=>'F'),
          array('name'=>'Olivia', 'gender'=>'F'),
          array('name'=>'Mia', 'gender'=>'F'),
          array('name'=>'Zoe', 'gender'=>'F'),
          array('name'=>'Lily', 'gender'=>'F'),
          array('name'=>'Emily', 'gender'=>'F'),
          array('name'=>'Aubrey', 'gender'=>'F'),
          array('name'=>'Kay', 'gender'=>'F'),
          array('name'=>'Ella', 'gender'=>'F'),
          array('name'=>'Nora', 'gender'=>'F'),
          array('name'=>'Grace', 'gender'=>'F'),
          array('name'=>'Rose', 'gender'=>'F'),
          array('name'=>'Sarah', 'gender'=>'F'),
          array('name'=>'Vicky', 'gender'=>'F'),
          array('name'=>'Maria', 'gender'=>'F'),
          array('name'=>'Eva', 'gender'=>'F'),
          array('name'=>'Bella', 'gender'=>'F'),
          array('name'=>'Sydney', 'gender'=>'F'),
          array('name'=>'Hermione', 'gender'=>'F'),
          array('name'=>'Pedro', 'gender'=>'M'),
          array('name'=>'Dave', 'gender'=>'M'),
          array('name'=>'John', 'gender'=>'M'),
          array('name'=>'Tim', 'gender'=>'M'),
          array('name'=>'Matt', 'gender'=>'M'),
          array('name'=>'Paul', 'gender'=>'M'),
          array('name'=>'Chris', 'gender'=>'M'),
          array('name'=>'Daniel', 'gender'=>'M'),
          array('name'=>'Liam', 'gender'=>'M'),
          array('name'=>'Noah', 'gender'=>'M'),
          array('name'=>'Ethan', 'gender'=>'M'),
          array('name'=>'Luke', 'gender'=>'M'),
          array('name'=>'Mike', 'gender'=>'M'),
          array('name'=>'Alexander', 'gender'=>'M'),
          array('name'=>'James', 'gender'=>'M'),
          array('name'=>'Michael', 'gender'=>'M'),
          array('name'=>'Connor', 'gender'=>'M'),
          array('name'=>'Martin', 'gender'=>'M'),
          array('name'=>'Edelmiro', 'gender'=>'M'),
          array('name'=>'Gabriel', 'gender'=>'M'),
          array('name'=>'Ramiro', 'gender'=>'M'),
          array('name'=>'Victor', 'gender'=>'M'),
          array('name'=>'David', 'gender'=>'M'),
          array('name'=>'Jason', 'gender'=>'M'),
          array('name'=>'Harry', 'gender'=>'M'),
        ));
    }
}
