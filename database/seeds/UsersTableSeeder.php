<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

 
    { 

        for($i = 0; $i < 260; $i++){
   
        DB::table('users')->insert([
            'room_number' =>  $i,
        ]);
    }
    }}



