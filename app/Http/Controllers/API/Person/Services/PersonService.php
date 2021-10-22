<?php

namespace App\Http\Controllers\API\Person\Services;

use App\Http\Controllers\API\Person\Models\PersonVO;

use App\Http\Controllers\API\Person\Repository\PersonRepository;
use Illuminate\Support\Facades\Validator;
class PersonService
{

    public function __construct(PersonRepository $personrepo)
    {

        $this->personrepo = $personrepo;
    }
    public function getPersonDataByMobileNo($mobileNo)
    {
        $datas =  $this->personrepo->getPersonDataByMobileNo($mobileNo);    
        $entities = $this->convertToPersonVO($datas);
        $response = ['message' => pStatusSuccess(), 'data' =>  $entities];
        return $response;         
      
    }
    public function personStore($datas, $personType){
       if($personType)
       {
        $validator =  $this->personValidation($datas);
       }else{
        $validator =  $this->employeeValidation($datas);
       }
       
        if ($validator->fails()) {

            return [
                'message' => pStatusFailed(),
                'data' => $validator->messages()->first()
            ];
        }     

        $datas = (object)$datas;
        $personMobileNo = $datas->pMobileNo;
        $personMobileData =  $this->personrepo->getPersonDataByMobileNo($personMobileNo);
        if($personMobileData)
        {
            dd("work if");
        }
         else
       {
             dd("work else");
       }
       
    }
   
    public function personValidation($data)
    {

        $rule = [

            'pFirstName' => 'required',
            'pMobileNo' => 'required',
            'pEmail' => 'required'
        ];
        $validator = Validator::make($data, $rule);

        return $validator;
    }
    public function employeeValidation($data)
    {

        $rule = [

            'pFirstName' => 'required',
            'pMobileNo' => 'required',

        ];
        $validator = Validator::make($data, $rule);

        return $validator;
    }
    public function convertToPersonVO($model = false, $salutation = false, $gender = false, $blood_groups = false)
    {

        $vo = new PersonVO($model);
        //$vo->setSalutationsList($salutation);
        //$vo->setGenderList($gender);
        //$vo->setBloodGroupList($blood_groups);

        return $vo;
    }

}