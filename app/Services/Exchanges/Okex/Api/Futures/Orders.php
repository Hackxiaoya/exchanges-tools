<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Futures;


class Orders
{
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
    
    /**
     * */
    static public function post(array $data=[]){
        $temp='{
	"result": true,
	"error_message": "",
	"error_code": "0",
	"order_id": "2918764476077056"
}';
        
        $temp=json_decode($temp,true);
        
        return $temp;
    }
    
    static public function postBatch(array $data=[]){
    }
    
    /**
     * 
     * */
    static public function postCancel(array $data=[]){
        $temp='{
	"result": true,
	"order_id": "2918861353032704",
	"instrument_id": "btc-usd-190628"
}';
        
        $temp=json_decode($temp,true);
        
        if(isset($data['order_id'])) $temp['order_id']=$data['order_id'];
        if(isset($data['instrument_id'])) $temp['instrument_id']=$data['instrument_id'];
        
        return $temp;
    }
    
    static public function postCancelBatch(array $data=[]){
        
    }
    
    static public function getAll(array $data=[]){
        
    }
    
    /**
     * 
     * */
    static public function get(array $data=[]){
        $temp='{
	"instrument_id": "BTC-USD-190628",
	"size": "1",
	"timestamp": "2019-05-31T03:22:23.000Z",
	"filled_qty": "0",
	"fee": "0",
	"order_id": "2918773113963520",
	"price": "100",
	"price_avg": "0",
	"status": "0",
	"state": "0",
	"type": "1",
	"contract_val": "100",
	"leverage": "10",
	"client_oid": "",
	"pnl": "0",
	"order_type": "0"
}';
        
        $temp=json_decode($temp,true);

        if(isset($data['order_id'])) $temp['order_id']=$data['order_id'];
        if(isset($data['client_oid'])) $temp['client_oid']=$data['order_id'];
        if(isset($data['instrument_id'])) $temp['instrument_id']=$data['instrument_id'];
        if(isset($data['type'])) $temp['type']=$data['type'];
        if(isset($data['price'])) $temp['price']=$data['price'];
        if(isset($data['size'])) $temp['size']=$data['size'];
        
        $temp=self::randStatus($temp);
        
        return $temp;
    }
}