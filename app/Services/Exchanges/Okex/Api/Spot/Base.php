<?php
namespace App\Services\Exchanges\Okex\Api\Spot;

class Base{
    static public $uid;
    static public $method;
    static public $url;
    static public $type;
    static public $data;
    
    static protected $status=[
        //订单状态(all:所有状态 open:未成交 part_filled:部分成交 canceling:撤销中 filled:已成交 cancelled:已撤销 ordering:下单中 failure：下单失败)
        'all',
        'open',
        'ordering',
        'filled',
        'part_filled',
        'canceling',
        'cancelled',
        'failure',
    ];
    
    /**
     * 随机订单状态
     * */
    static protected function randStatus($data){
        $data['status']=self::$status[rand(0,7)];
        
        return $data;
    }
}