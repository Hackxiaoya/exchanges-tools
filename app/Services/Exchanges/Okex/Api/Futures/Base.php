<?php
namespace App\Services\Exchanges\Okex\Api\Futures;

class Base{
    static public $uid;
    static public $method;
    static public $url;
    static public $type;
    static public $data;
    
    static protected $status=[
        //订单状态(-1.撤单成功；0:等待成交 1:部分成交 2:全部成交 ）
        '-1',
        '0',
        '1',
        '2',
    ];
    
    /**
     * 随机订单状态
     * */
    static protected function randStatus($data){
        $data['status']=self::$status[rand(0,3)];
        
        return $data;
    }
    
}