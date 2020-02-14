<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gudregistersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gudregisters')->insert ( [ [
            
            //'user_id'=>'5',
            'name' => 'vignesh',
            'email' => 'viky11@gmail.com',
            'contact' => '0721237910',
            'age' => '24',
            'gender' => 'male',
            'licence' => '24',
            'area' => 'jaffna',
            'price' => '4500',
            'image_path' => 'images/guide/guide1',
          //  'isavaliable' => '1',
        ],

        [
            //'user_id'=>'6',
            'name' => 'rathu',
            'email' => 'rathu@gmail.com',
            'contact' => '0774567910',
            'age' => '33',
            'gender' => 'male',
            'licence' => '2414',
            'area' => 'colombo',
            'price' => '3500',
            'image_path' => 'images/guide/guide2',
           // 'isavaliable' => '1',
        ],

        [
           // 'user_id'=>'7',
            'name' => 'raveesha',
            'email' => 'raveesha2@gmail.com',
            'contact' => '0774567880',
            'age' => '23',
            'gender' => 'male',
            'licence' => '0014',
            'area' => 'colombo',
            'price' => '3000',
            'image_path' => 'images/guide/guide3',
          //  'isavailable' => '1',
        ],

       ]);
    }
}
