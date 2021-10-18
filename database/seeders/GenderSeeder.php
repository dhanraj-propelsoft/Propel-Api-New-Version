<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\AdminModel\Gender;
class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::truncate(); 
        $genders = [ 
            [ 
              'name' => 'Male',             
            ],
            [
              'name' => 'Female',             
            ],
             [
              'name' => 'Third Gender',              
            ] 
          ];
            //   DB::table('genders')->insert([
            //     'name' => 'Male',
            // ]);
          foreach($genders as $gender)
          {
            Gender::insert([
               'name' => $gender['name']              
             ]);
           }
    }
}
