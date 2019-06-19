<?php
namespace App\Services\Exchanges\Okex\Api\Spot;

use App\Models\Api;

class Base{
    static public $uid;
    static public $method;
    static public $url;
    static public $type;
    static public $data;
    
    static public $mirroring;
    
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
        $data['status']=self::$status[rand(1,7)];
        
        switch ($data['status']){
            case 'all':{
                break;
            }
            case 'open':{
                $data['filled_size']=0;
                $data['filled_notional']=0;
                break;
            }
            case 'ordering':{
                $data['filled_size']=0;
                $data['filled_notional']=0;
                break;
            }
            case 'filled':{
                $data['filled_notional']=self::randPrice($data['price']);
                break;
            }
            case 'part_filled':{
                $data['filled_size']=abs($data['size']-rand(5,20)/100);
                $data['filled_notional']=self::randPrice($data['price']);
                break;
            }
            case 'canceling':{
                $data['filled_size']=abs($data['size']-rand(5,20)/100);
                $data['filled_notional']=self::randPrice($data['price']);
                break;
            }
            case 'cancelled':{
                $data['filled_size']=abs($data['size']-rand(5,20)/100);
                $data['filled_notional']=self::randPrice($data['price']);
                break;
            }
            case 'failure':{
                $data['filled_size']=0;
                $data['filled_notional']=0;
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
        self::$mirroring=Api::where('platform','okex')
        ->where('type',self::$type)
        ->where('method',self::$method)
        ->where('url',self::$url)
        ->first();
        //print_r(\DB::getQueryLog()); // 获取查询日志
        return self::$mirroring;
    }
}