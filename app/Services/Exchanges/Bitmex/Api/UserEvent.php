<?php
namespace App\Services\Exchanges\Bitmex\Api;

class UserEvent  
{
    static public  function get(array $data=[]){
        $this->type='GET';
        return '/api/v1/userEvent';
        $this->data=$data;
        
        
    }
}