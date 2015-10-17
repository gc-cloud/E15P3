<?php

use Illuminate\Database\Seeder;

class Email_providersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('email_providers')->insert(array(
          array('id'=>1, 'email_provider'=>'gmail.com'),
          array('id'=>3, 'email_provider'=>'yahoo.com'),
          array('id'=>4, 'email_provider'=>'aol.com'),
          array('id'=>5, 'email_provider'=>'rogers.com'),
          array('id'=>6, 'email_provider'=>'infinity.com'),
          array('id'=>7, 'email_provider'=>'comcast.com'),
          array('id'=>8, 'email_provider'=>'me.com' ),
          array('id'=>9, 'email_provider'=>'mit.edu'),
          array('id'=>10, 'email_provider'=>'harvard.edu'),
          array('id'=>11, 'email_provider'=>'stanford.edu'),
          array('id'=>12, 'email_provider'=>'microsoft.com' ),
          array('id'=>13, 'email_provider'=>'facebook.com'),
          array('id'=>14, 'email_provider'=>'google.com'),

        ));
    }
}
