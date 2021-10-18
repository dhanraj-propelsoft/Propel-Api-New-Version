<?php

namespace App\Http\Controllers\API\Person\Services;

use App\Http\Controllers\API\Person\Repository\PersonRepository;

class PersonService
{

    public function __construct(PersonRepository $personrepo)
    {

        $this->personrepo = $personrepo;
    }
    public function getPersonDataByMobileNo($mobileNo)
    {
        $response =  $this->personrepo->getPersonDataByMobileNo($mobileNo);             
        return $response;
    }

}