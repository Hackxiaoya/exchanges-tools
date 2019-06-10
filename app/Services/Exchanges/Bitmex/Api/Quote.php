<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Quote   extends Base
{
    static public  function get(array $data=[]){
        $this->type='GET';
        return '/api/v1/quote';
        $this->data=$data;
        
        
    }
    
    static public  function getBucketed(array $data=[]){
        $this->type='GET';
        return '/api/v1/quote/bucketed';
        $this->data=$data;
        
        
    }
}