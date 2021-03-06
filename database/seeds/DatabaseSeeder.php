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

        $this->call(NamesSeeder::class);
        $this->call(SurnamesSeeder::class);
        $this->call(Email_providersSeeder::class);
        $this->call(HobbiesSeeder::class);
        $this->call(PhotosSeeder::class);

        Model::reguard();
    }
}
