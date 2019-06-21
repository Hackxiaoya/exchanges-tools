<?php
namespace App\Services\Exchanges\Huobi\Api\Spot;

use App\Models\Api;

class Base{
    static public $uid;
    static public $method;
    static public $url;
    static public $type;
    static public $data;
    
    static public $mirroring;
    
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
    static protected function randStatus($data){
        $data['data']['state']=self::$status[rand(0,5)];
        /* $map['_order_id']=$data['data']['id'];
        $map['_filled_qty']=$data['data']['field-amount'];
        $map['_price_avg']=$data['data']['field-cash-amount']; */
        switch ($data['status']){
            case 'submitting':{
                $data['data']['field-amount']=0;
                $data['data']['field-cash-amount']=0;
                break;
            }
            case 'submitted':{
                $data['data']['field-amount']=0;
                $data['data']['field-cash-amount']=0;
                break;
            }
            case 'filled':{
                $data['data']['field-amount']=$data['data']['amount'];
                $data['data']['field-cash-amount']=$data['data']['price'];
                break;
            }
            case 'partial-filled':{
                $data['data']['field-amount']=abs($data['data']['amount']-rand(5,20)/100);
                $data['data']['field-cash-amount']=self::randPrice($data['data']['price']);
                break;
            }
            case 'partial-canceled':{
                $data['data']['field-amount']=abs($data['data']['amount']-rand(5,20)/100);
                $data['data']['field-cash-amount']=self::randPrice($data['data']['price']);
                break;
            }
            case 'canceled':{
                $data['data']['field-amount']=abs($data['data']['amount']-rand(5,20)/100);
                $data['data']['field-cash-amount']=self::randPrice($data['data']['price']);
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
        self::$mirroring=Api::where('platform','huobi')
        ->where('type',self::$type)
        ->where('method',self::$method)
        ->where('url',self::$url)
        ->first();
        //print_r(\DB::getQueryLog());// 获取查询日志
        
        return self::$mirroring;
    }
}