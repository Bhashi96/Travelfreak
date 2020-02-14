<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([


            'user_type' => 'drv',
            'name' => 'mayu',
            'email' => 'mayurathan@gmail.com',
            'password' => Hash::make('123456'),
            
        ],

        [
            'user_type' => 'drv',
            'name' => 'kalmal',
            'email' => 'kamal@gmail.com',
            'password' => Hash::make('123456'),
            
            
          
        ],

        [
            'user_type' => 'drv',
            'name' => 'vimala',
            'email' => 'vimala@gmail.com',
            'password' => Hash::make('123456'),
            
            
          
        ],

        [
            'user_type' => 'drv',
            'name' => 'sajith',
            'email' => 'sajith1@gmail.com',
            'password' => Hash::make('123456'),
            
        ],
        
        [
            
            'user_type' => 'gud',
            'name' => 'sandy',
            'email' => 'sandy@gmail.com',
            'password' => Hash::make('123456'),
            
        ],

        [
            'user_type' => 'gud',
            'name' => 'rathu',
            'email' => 'rathu@gmail.com',
            'password' => Hash::make('123456'),
           
        ],

        [
            'user_type' => 'gud',
            'name' => 'raveesha',
            'email' => 'raveesha2@gmail.com',
            'password' => Hash::make('123456'),
           
        ],

       );
    }
}
