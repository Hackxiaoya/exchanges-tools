<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Base{
    static public $uid;
    static public $method;
    static public $url;
    static public $type;
    static public $data;
    
    /**
     * 订单状态
     * */
    static protected $status=[
        'Filled',
        'New',
        'PartiallyFilled',
        'Canceled',
        'SystemError',
    ];
    
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
     * 随机订单状态
     * */
    static protected function randStatus($data){
        
        $data['ordStatus']=self::$status[rand(0,4)];
        
        switch ($data['ordStatus']){
            case 'Filled':{
                $data['cumQty']=0;
                break;
            }
            case 'New':{
                $data['cumQty']=0;
                break;
            }
            case 'PartiallyFilled':{
                $data['cumQty']=rand(1,$data['orderQty']-1);
                $data['avgPx']=self::randPrice($data['price']);
                
                break;
            }
            case 'Canceled':{
                $data['cumQty']=rand(1,$data['orderQty']-1);
                $data['avgPx']=self::randPrice($data['price']);
                break;
            }
            case 'SystemError':{
                $data['cumQty']=0;
                break;
            }
        }
        
        return $data;
    }
}