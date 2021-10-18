<?php

namespace App\Http\Controllers\API\Person\Repository;
class PersonRepository
{
    public function getPersonDataByMobileNo($mobileNo)
    {
        dd("Repo File");

        $response =  $this->personrepo->getPersonDataByMobileNo($mobileNo);             
        return $response;
    }
}