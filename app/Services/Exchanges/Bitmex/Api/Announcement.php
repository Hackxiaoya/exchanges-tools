<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Announcement extends Base
{
    /**
     * /api/v1/announcement
     * */
    static function get(array $data=[]){
        
        return '/api/v1/announcement';
    }
    
    /**
     *  /api/v1/announcement/urgent
     * */
    static function getUrgent(array $data=[]){
        
        
        return '/api/v1/announcement/urgent';
    }
}