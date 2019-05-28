<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Stats  
{
    static public  function get(array $data=[]){
        $this->type='GET';
        return '/api/v1/stats';
        $this->data=$data;
        
        
    }
    
    static public  function getHistory(array $data=[]){
        $this->type='GET';
        return '/api/v1/stats/history';
        $this->data=$data;
        
        
    }
    
    static public  function getHistoryUSD(array $data=[]){
        $this->type='GET';
        return '/api/v1/stats/historyUSD';
        $this->data=$data;
        
        
    }
}