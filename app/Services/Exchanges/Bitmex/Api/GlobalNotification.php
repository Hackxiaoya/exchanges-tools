<?php
namespace App\Services\Exchanges\Bitmex\Api;

class GlobalNotification   extends Base
{
    static public  function get(array $data=[]){
        return '/api/v1/globalNotification';
    }
}