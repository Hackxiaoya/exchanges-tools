<?php
namespace App\Services\Exchanges\Huobi\Api\Spot;

class Base{
    protected static $status=[
        //submitting , submitted 已提交, partial-filled 部分成交, partial-canceled 部分成交撤销, filled 完全成交, canceled 已撤销
        'submitting',
        'submitted',
        'filled',
        'partial-filled',
        'partial-canceled',
        'canceled',
    ];
    
    /**
     * 随机订单状态
     * */
    static protected function randStatus(){
        return self::$status[rand(0,5)];
    }
}