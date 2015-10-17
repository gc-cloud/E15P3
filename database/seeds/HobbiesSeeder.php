<?php

use Illuminate\Database\Seeder;

class HobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('hobbies')->insert(array(
          array('id'=>1, 'hobby'=>'playing guitar' ),
          array('id'=>2, 'hobby'=>'playing piano'),
          array('id'=>3, 'hobby'=>'walking my dog'),
          array('id'=>4, 'hobby'=>'watching TV'),
          array('id'=>5, 'hobby'=>'writing sci-fi books'),
          array('id'=>6, 'hobby'=>'reading sci-fi books'),
          array('id'=>7, 'hobby'=>'going to the movies'),
          array('id'=>8, 'hobby'=>'writing PHP code' ),
          array('id'=>9, 'hobby'=>'hanging around'),
          array('id'=>10, 'hobby'=>'collecting toothpicks'),
          array('id'=>11, 'hobby'=>'skiing'),
          array('id'=>12, 'hobby'=>'snowboarding' ),
          array('id'=>13, 'hobby'=>'reading'),
          array('id'=>14, 'hobby'=>'eating cucumber sandwiches', ),
          array('id'=>15, 'hobby'=>'collecting old pc\'s' ),
          array('id'=>16, 'hobby'=>'riding my bicicle' ),
          array('id'=>17, 'hobby'=>'hiking' ),
          array('id'=>18, 'hobby'=>'fishing' ),
          array('id'=>19, 'hobby'=>'eating chocolate cookies' ),
          array('id'=>20, 'hobby'=>'sleeping late on Sundays' ),
          array('id'=>21, 'hobby'=>'waking up at dawn' ),
          array('id'=>22, 'hobby'=>'star gazing' ),
          array('id'=>23, 'hobby'=>'travel to new places' ),
          array('id'=>24, 'hobby'=>'playing Baseball' ),
          array('id'=>25, 'hobby'=>'dancing salsa' ),
          array('id'=>26, 'hobby'=>'dragon boat racing' ),
          array('id'=>27, 'hobby'=>'going to the movies' ),
          array('id'=>28, 'hobby'=>'going to live musical events'),
          array('id'=>29, 'hobby'=>'going to church' ),
          array('id'=>30, 'hobby'=>'hanging out with my friends' ),
          array('id'=>31, 'hobby'=>'running marathons'),
          array('id'=>32, 'hobby'=>'doing yoga' ),
          array('id'=>33, 'hobby'=>'still meditation' ),
          array('id'=>34, 'hobby'=>'mental math' ),
          array('id'=>35, 'hobby'=>'learning science'),
          array('id'=>36, 'hobby'=>'reading romantic books' ),
          array('id'=>37, 'hobby'=>'watching chick-flicks' ),
          array('id'=>38, 'hobby'=>'doing things that are funny' ),
          array('id'=>39, 'hobby'=>'drawing' ),

        ));
    }
}
