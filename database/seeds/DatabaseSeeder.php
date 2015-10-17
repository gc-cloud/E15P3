<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Sample call:
        // $this->call(UserTableSeeder::class);
        $this->call(NamesSeeder::class);
        $this->call(SurnamesSeeder::class);
        $this->call(Email_providersSeeder::class);
        $this->call(HobbiesSeeder::class);

        Model::reguard();
    }
}
