<?php
/*
 * File name: PersonAPIController.php
 * Start At modified: 2021.10.18 at 09:38:19
 * Last modified: 2021.10.18 at 09:38:19
 * Author:R.Dhanaraj
 * Copyright (c) 2021
 */

namespace App\Http\Controllers\API\Person\Controller;

use App\Http\Controllers\API\Person\Services\PersonService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class AddressController
 * @package App\Http\Controllers\API
 */
class PersonAPIController extends Controller
{


    public function __construct(PersonService $personService)
    {

        $this->personService = $personService;
    }


    public function getPersonDataByMobileNo($mobileNo)
    {
        $response =  $this->personService->getPersonDataByMobileNo($mobileNo);
        return $response;
    }

    public function personStore(Request $request)
    {

        $response = $this->personService->personStore($request->all(), "Person");
        return response()->json($response);
    }
}
