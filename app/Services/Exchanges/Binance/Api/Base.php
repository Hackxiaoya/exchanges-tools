<?php
namespace App\Services\Exchanges\Binance\Api;

class Base{
    static $status=[
        //NEW 新建订单    PARTIALLY_FILLED 部分成交   FILLED 全部成交    CANCELED 已撤销    PENDING_CANCEL 正在撤销中(目前不会遇到这个状态)
        //REJECTED 订单被拒绝    EXPIRED 订单过期(根据timeInForce参数规则)
        'FILLED',
        'NEW',
        'PARTIALLY_FILLED',
        'CANCELED',
        'REJECTED',
        'EXPIRED',
    ];
    
    /**
     * 随机订单状态
     * */
    static protected function randStatus($data){
        $data['status']=self::$status[rand(0,5)];
        
        return $data;
    }
}