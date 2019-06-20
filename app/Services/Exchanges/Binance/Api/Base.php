<?php
namespace App\Services\Exchanges\Binance\Api;

use App\Models\Api;

class Base{
    static public $uid;
    static public $method;
    static public $url;
    static public $type;
    static public $data;
    
    static public $mirroring;
    
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
        
        switch ($data['status']){
            case 'NEW':{
                $data['executedQty']=0;
                $data['cummulativeQuoteQty']=0;
                break;
            }
            case 'PARTIALLY_FILLED':{
                $data['executedQty']=abs($data['origQty']-rand(5,20)/100);;
                $data['cummulativeQuoteQty']=self::randPrice($data['price']);
                break;
            }
            case 'FILLED':{
                $data['executedQty']=abs($data['origQty']-rand(5,20)/100);;
                $data['cummulativeQuoteQty']=self::randPrice($data['price']);
                break;
            }
            case 'CANCELED':{
                $data['executedQty']=abs($data['origQty']-rand(5,20)/100);;
                $data['cummulativeQuoteQty']=self::randPrice($data['price']);
                break;
            }
            case 'REJECTED':{
                $data['executedQty']=0;
                $data['cummulativeQuoteQty']=0;
                break;
            }
            case 'EXPIRED':{
                break;
            }
        }
        
        return $data;
    }
    
    /**
     * 随机价格
     * */
    static protected function randPrice($price){
        if(is_float($price) && $price<0){
            $tags=100000000;
            $temp=$price*$tags;
            $price=rand(1,$temp-1)/$tags;
        }else{
            $price=rand(1,$price-1);
        }
        
        return $price;
    }
    
    /**
     * 获取镜像数据
     * */
    static protected function getMirroring(){
        //\DB::connection()->enableQueryLog(); // 开启查询日志
        self::$mirroring=Api::where('platform','binance')
        ->where('type',self::$type)
        ->where('method',self::$method)
        ->where('url',self::$url)
        ->first();
        //print_r(\DB::getQueryLog());// 获取查询日志
        
        return self::$mirroring;
    }
}