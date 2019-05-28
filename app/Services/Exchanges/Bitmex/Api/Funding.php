<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Funding 
{
    static public  function get(array $data=[]){
        return '/api/v1/funding';
    }
}