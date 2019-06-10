<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Trade   extends Base
{
    static public  function get(array $data=[]){
        $this->type='GET';
        return '/api/v1/trade';
        $this->data=$data;
        
        
    }
    
    static public  function getBucketed(array $data=[]){
        $this->type='GET';
        return '/api/v1/trade/bucketed';
        $this->data=$data;
        
        
    }
}