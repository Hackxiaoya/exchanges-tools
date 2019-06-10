<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Schema   extends Base
{
    static public  function get(array $data=[]){
        $this->type='GET';
        return '/api/v1/schema';
        $this->data=$data;
        
        
    }
    
    static public  function getWebsocketHelp(array $data=[]){
        $this->type='GET';
        return '/api/v1/schema/websocketHelp';
        $this->data=$data;
        
        
    }
}