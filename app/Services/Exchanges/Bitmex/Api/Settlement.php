<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Settlement  
{
    static public  function get(array $data=[]){
        $this->type='GET';
        return '/api/v1/settlement';
        $this->data=$data;
        
        
    }
}