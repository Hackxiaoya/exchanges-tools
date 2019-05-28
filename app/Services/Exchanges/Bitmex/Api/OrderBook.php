<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Bitmex\Api;

class OrderBook  
{
    /**
     * 
     * @param array symbol=XBTUSD&depth=25
     * */
    static public  function get(array $data=['symbol'=>'XBTUSD','depth'=>100]){
        $this->type='GET';
        return '/api/v1/orderBook/L2';
        $this->data=$data;
        
        
    }
}