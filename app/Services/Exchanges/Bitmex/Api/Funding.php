<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Funding  extends Base
{
    static public  function get(array $data=[]){
        return '/api/v1/funding';
    }
}