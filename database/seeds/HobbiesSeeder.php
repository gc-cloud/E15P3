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
          array('id'=>1, 'hobby'=>'Playing guitar' ),
          array('id'=>2, 'hobby'=>'Playing piano'),
          array('id'=>3, 'hobby'=>'Walking my dog'),
          array('id'=>4, 'hobby'=>'Watching TV'),
          array('id'=>5, 'hobby'=>'Writing sci-fi books'),
          array('id'=>6, 'hobby'=>'Reading sci-fi books'),
          array('id'=>7, 'hobby'=>'Going to the movies'),
          array('id'=>8, 'hobby'=>'Writing PHP code' ),
          array('id'=>9, 'hobby'=>'Hanging around'),
          array('id'=>10, 'hobby'=>'Collecting toothpicks'),
          array('id'=>11, 'hobby'=>'Skiing'),
          array('id'=>12, 'hobby'=>'Snowboarding' ),
          array('id'=>13, 'hobby'=>'Reading'),
          array('id'=>14, 'hobby'=>'Eating cucumber sandwiches', ),
          array('id'=>15, 'hobby'=>'Collecting old pc\'s' ),
          array('id'=>16, 'hobby'=>'Riding my bicicle' ),
          array('id'=>17, 'hobby'=>'Hiking' ),
          array('id'=>18, 'hobby'=>'Fishing' ),
          array('id'=>19, 'hobby'=>'Eating chocolate cookies' ),
          array('id'=>20, 'hobby'=>'Sleeping late on Sundays' ),
          array('id'=>21, 'hobby'=>'Waking up at dawn' ),
          array('id'=>22, 'hobby'=>'Star gazing' ),
          array('id'=>23, 'hobby'=>'Traveling to new places' ),
          array('id'=>24, 'hobby'=>'Playing Baseball' ),
          array('id'=>25, 'hobby'=>'Dancing Salsa' ),
          array('id'=>26, 'hobby'=>'Dragon boat racing' ),
          array('id'=>27, 'hobby'=>'Going to the movies' ),
          array('id'=>28, 'hobby'=>'Going to live musical events'),
          array('id'=>29, 'hobby'=>'Going to church' ),
          array('id'=>30, 'hobby'=>'Hanging out with my friends' ),
          array('id'=>31, 'hobby'=>'Running marathons'),
          array('id'=>32, 'hobby'=>'Doing yoga' ),
          array('id'=>33, 'hobby'=>'Still meditation' ),
          array('id'=>34, 'hobby'=>'Mental math' ),
          array('id'=>35, 'hobby'=>'Learning science'),
          array('id'=>36, 'hobby'=>'Reading romantic books' ),
          array('id'=>37, 'hobby'=>'Watching chick-flicks' ),
          array('id'=>38, 'hobby'=>'Jazz' ),
          array('id'=>39, 'hobby'=>'Drawing' ),

        ));
    }
}
