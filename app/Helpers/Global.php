<?php

use App\Repositories\Carts;

if (! function_exists("idrFormat"))
{
    function idrFormat($nominal)
    {
        $value = "Rp. ". number_format($nominal, 0, ',', '.');;
        return $value;
    }
}

if (!function_exists('getCountCart'))
{
    function getCountCart()
    {
        return Carts::countAllBySession();
    }
}

if (! function_exists('generateCodeTransaction'))
{
    function generateCodeTransaction()
    {
        return "USM-TRX-" .time();
    }
}

if(! function_exists('getCustSessions'))
{
    function getCustSessions()
    {
        return Session::get('customers');
    }
}

if(! function_exists('storeCustSessions'))
{
    function storeCustSessions($customers)
    {
        $sessions = new stdClass();
        $sessions->id = $customers->id;
        $sessions->name = $customers->name;
        $sessions->email = $customers->email;

        session (['customers' => $sessions]);

    }
}