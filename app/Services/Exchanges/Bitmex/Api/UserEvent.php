<?php
namespace App\Services\Exchanges\Bitmex\Api;

class UserEvent   extends Base
{
    static public  function get(array $data=[]){
        $this->type='GET';
        return '/api/v1/userEvent';
        $this->data=$data;
        
        
    }
}