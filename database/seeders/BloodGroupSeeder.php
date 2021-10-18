<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminModel\BloodGroup;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BloodGroup::truncate(); 
        $datas = [ 
            [ 
                'name' => 'O+',             
              ],
              [
                'name' => 'O-',             
              ],              
            [ 
              'name' => 'A+',             
            ],
            [
              'name' => 'A-',             
            ],
             [
              'name' => 'B+',              
            ],
            [ 
                'name' => 'B-',             
              ],
              [
                'name' => 'AB+',             
              ],
               [
                'name' => 'AB-',              
              ] 
          ];
           
          foreach($datas as $data)
          {
            BloodGroup::insert([
               'name' => $data['name']              
             ]);
           }
    }
}
