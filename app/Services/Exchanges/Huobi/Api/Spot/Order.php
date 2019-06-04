<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Huobi\Api\Spot;

class Order
{
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
    
    /**
     *
     * */
    static public function postPlace(array $data=[]){
        $temp='{
	"status": "ok",
	"data": "35804833872"
}';
        
        $temp=json_decode($temp,true);
        
        return $temp;
        
    }
    
    /**
     * 交易	POST/v1/order/orders/{order-id}/submitcancel	POST	按order-id撤销一个订单	Y	Y
     * */
    static public function postSubmitCancel(array $data=[]){
        $temp='{"status":"ok","data":"35804833872"}';
        
        $temp=json_decode($temp,true);
        
        return $temp;
    }
    
    /**
     *
     * */
    static public function postBatchCancel(array $data=[]){
        'GET';
        '';
        
        
    }
    
    /**
     *
     * */
    static public function postBatchCancelOpenOrders(array $data=[]){
        'GET';
        '';
        
        
    }
    
    /**
     * 用户订单信息	GET /v1/order/orders/{order-id}	GET	根据order-id查询订单详情	Y	Y
     * */
    static public function get(array $data=[]){
        $temp='{
	"status": "ok",
	"data": {
		"id": 35804833872,
		"symbol": "btcusdt",
		"account-id": 5720968,
		"amount": "0.001000000000000000",
		"price": "100.000000000000000000",
		"created-at": 1559614845313,
		"type": "buy-limit",
		"field-amount": "0.0",
		"field-cash-amount": "0.0",
		"field-fees": "0.0",
		"finished-at": 0,
		"source": "spot-api",
		"state": "submitted",
		"canceled-at": 0
	}
}';
        $temp=json_decode($temp,true);
        
        if(isset($data['symbol'])) $temp['data']['symbol']=$data['symbol'];
        if(isset($data['type'])) $temp['data']['type']=$data['type'];
        if(isset($data['amount'])) $temp['data']['amount']=$data['amount'];
        if(isset($data['price'])) $temp['data']['price']=$data['price'];
        
        $temp['data']['state']=self::randStatus();
        
        return $temp;
    }
    
    /**
     * 用户订单信息	GET /v1/order/orders	GET	查询用户当前委托、或历史委托订单 (up to 100)	Y	Y
     * */
    static public function getAll(array $data=[]){
        'GET';
        '';
        
        
    }
    
    /**
     * 用户订单信息	GET /v1/order/orders/{order-id}/matchresults	GET	根据order-id查询订单的成交明细	Y	Y
     * */
    static public function getMatchresults(array $data=[]){
        'GET';
        '';
        
        
    }
    
    /**
     * 用户订单信息	GET /v1/order/matchresults	GET	查询用户当前成交、历史成交	Y	Y
     * */
    static public function getMatchresultsAll(array $data=[]){
        'GET';
        '';
        
        
    }
    
    /**
     * 
     * */
    static public function getOpenOrders(array $data=[]){
        'GET';
        '';
        
        
    }
}