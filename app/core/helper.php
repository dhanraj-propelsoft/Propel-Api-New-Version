<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

//get Common Db Connection Name
if (!function_exists('pCommonDBConnectionName')) {

    /**
     * Returns a pAuthOrganizationId
     *
     * @return int or Null
     *
     */
    function pCommonDBConnectionName()
    {
        return 'mysql';
    }
}

// Get Bussiness DB Connection Name
if (!function_exists('pBusinessDBConnectionName')) {

    /**
     * Returns a pAuthOrganizationId
     *
     * @return int or Null
     *
     */
    function pBusinessDBConnectionName()
    {
        return 'businessDB';
    }
}
// This function return success status
if (!function_exists('pStatusSuccess')) {

    /**
     * Returns a status string
     *
     * @return string
     *
     */
    function pStatusSuccess()
    {
        return 'SUCCESS';
    }
}

// This function return failed status
if (!function_exists('pStatusFailed')) {

    /**
     * Returns a status string
     *
     * @return string
     *
     */
    function pStatusFailed()
    {
        return 'FAILED';
    }
}
if (!function_exists('pGenarateOTP')) {
 function pGenarateOTP($num)
    {
        $x = $num - 1;

        $min = pow(10, $x);
        $max = pow(10, $x + 1) - 1;
        $value = rand($min, $max);

        return $value;
    }
}