<?php

use Illuminate\Database\Seeder;

class EqpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eqpregisters')->insert ( [
            [

         //   'user_id'=>'1',
            'name' => 'Yathu',
            'email' => 'Yathu6921@gmail.com',
            'contact' => '0771257693',
            'address' => 'chava',
            'area'=>'jaffna',
            'image_path' => 'images/eqp/eqp1',
          //  'isavaliable' => '1',
        ],

        [
           // 'user_id'=>'2',
           'name' => 'Nazra',
            'email' => 'nakim21@gmail.com',
            'contact' => '0777897693',
            'address' => 'chilawa',
            'area'=>'colombo',
            'image_path' =>  'images/eqp/eqp2',
           // 'isavaliable' => '1',
        ],

        [
           // 'user_id'=>'3',
           'name' => 'Aathi',
           'email' => 'athipan1@gmail.com',
           'contact' => '0711257543',
           'address' => 'main road',
           'area'=>'kandy',
           'image_path' =>  'images/eqp/eqp3',
           // 'isavaliable' => '1',
        ],

        [
           // 'user_id'=>'4',
           'name' => 'Pamal',
            'email' => 'pamalshan4@gmail.com',
            'contact' => '0757857693',
            'address' => 'hill street',
            'area'=>'nuwara',
            'image_path' =>  'images/eqp/eqp4',
           // 'isavailable' => '1',
        ],
    
    
    
    ]);
    }
}
