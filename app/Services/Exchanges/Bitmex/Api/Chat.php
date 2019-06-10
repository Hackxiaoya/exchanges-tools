<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Chat extends Base
{
    static public function get(array $data=[]){
        
        return '/api/v1/chat';
        
        
        
    }
    
    static public function post(array $data){
        
        return '/api/v1/chat';
        
        
        
    }
    
    static public function getChannels(array $data=[]){
        
        return '/api/v1/chat/channels';
        
        
        
    }
    
    static public function getConnected(array $data=[]){
        
        return '/api/v1/chat/connected';
        
        
        
    }
}