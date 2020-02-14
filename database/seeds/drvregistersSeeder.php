<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class drvregistersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drvregisters')->insert ( [
            [

         //   'user_id'=>'1',
            'name' => 'azam',
            'email' => 'azam21@gmail.com',
            'contact' => '0771254693',
            'age' => '24',
            'gender' => 'male',
            'area'=>'jaffna',
            'licence' => '24',
            'v_reg_no' => 'np-xw-2401',
            'image_path' => 'images/driver/driver1',
          //  'isavaliable' => '1',
        ],

        [
           // 'user_id'=>'2',
            'name' => 'kalmal',
            'email' => 'kamal@gmail.com',
            'contact' => '0774567810',
            'age' => '54',
            'gender' => 'male',
            'area'=>'jaffna',
            'licence' => '2445',
            'v_reg_no' => 'np-kw-0401',
            'image_path' => 'images/driver/driver2',
           // 'isavaliable' => '1',
        ],

        [
           // 'user_id'=>'3',
            'name' => 'vimala',
            'email' => 'vimala@gmail.com',
            'contact' => '0724865126',
            'age' => '34',
            'gender' => 'female',
            'area'=>'jaffna',
            'licence' => '102',
            'v_reg_no' => 'np-abc-2401',
            'image_path' => 'images/driver/driver3',
           // 'isavaliable' => '1',
        ],

        [
           // 'user_id'=>'4',
            'name' => 'sajith',
            'email' => 'sajith1@gmail.com',
            'contact' => '0764567820',
            'age' => '27',
            'gender' => 'male',
            'area'=>'jaffna',
            'licence' => '0257',
            'v_reg_no' => 'wp-xu-4701',
            'image_path' => 'images/driver/driver4',
           // 'isavailable' => '1',
        ],
    
    
    
    ]);
    }
}
