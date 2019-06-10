<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Insurance   extends Base
{
    static public  function get(array $data=[]){
        $this->type='GET';
        return '/api/v1/insurance';
        $this->data=$data;
        
        
    }
}