<?php

namespace App\Http\Controllers\API\Person\Repository;

use App\Models\PersonModel\Person;

class PersonRepository
{
    public function getPersonDataByMobileNo($mobileNo)
    {
  
           
        $datas = Person::with('personMobile','user','personEmail');
        $datas->whereHas('personMobile', function ($query) use ($mobileNo)
        {
           $query->where(['mobile_no' => $mobileNo]);
        });

    $datass = $datas->first();

        return $datass;        
       
    }
}