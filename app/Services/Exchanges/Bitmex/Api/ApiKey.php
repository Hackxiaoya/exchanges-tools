<?php
namespace App\Services\Exchanges\Bitmex\Api;



class ApiKey
{
    static public function get(){
        return '/api/v1/apiKey';
    }
    
    static public function post(array $data=[]){
        return '/api/v1/apiKey';
    }
    
    static public function postDisable(array $data=[]){
        return '/api/v1/apiKey/disable';
    }
    
    static public function postEnable(array $data=[]){
        return '/api/v1/apiKey/enable';
    }
    
    static public function delete(array $data=[]){
        return '/api/v1/apiKey';
    }
}