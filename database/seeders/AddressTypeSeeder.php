<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminModel\AddressType;
class AddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddressType::truncate(); 
        $datas = [ 
            [ 
                'name' => 'Home',             
              ],
              [
                'name' => 'Bussiness',             
              ],              
            
            
          ];
           
          foreach($datas as $data)
          {
            AddressType::insert([
               'name' => $data['name']              
             ]);
           }
    
    }
}
