<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Leaderboard  
{
    static public  function get(array $data=[]){
        $this->type='GET';
        return '/api/v1/leaderboard';
        $this->data=$data;
        
        
    }
    
    static public  function getName(array $data=[]){
        $this->type='GET';
        return '/api/v1/leaderboard/name';
        $this->data=$data;
        
        
    }
}