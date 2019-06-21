<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Huobi\Api\Spot;

use App\Models\UserData;

class Order extends Base
{
    /**
     *
     * */
    static public function postPlace(array $data=[]){
        $mirroring=self::getMirroring();
        $temp=json_decode($mirroring['data'],true);
        $temp['data']=rand(100000,999999).rand(10000,99999);
        
        $test='{
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
        $test=json_decode($test,true);
        
        if(isset($data['symbol'])) $test['data']['symbol']=$data['symbol'];
        if(isset($data['type'])) $test['data']['type']=$data['type'];
        if(isset($data['amount'])) $test['data']['amount']=$data['amount'];
        if(isset($data['price'])) $test['data']['price']=$data['price'];
        $test['data']['id']=$temp['data'];
        
        $test=self::randStatus($test);
        
        UserData::create([
            'api_id'=>$mirroring->id,
            'user_id'=>self::$uid,
            'user_strategy_id'=>0,
            'data'=>json_encode($test),
        ]);
        
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
        $mirroring=self::getMirroring();
        $temp=json_decode($mirroring['data'],true);
        
        $user_data=UserData::where('user_id',self::$uid)
        ->where('user_strategy_id',0);
        
        
        if(isset($data['order-id'])  && !empty($data['order-id'])){
            $user_data->where([
                ['data->data->id', 'like', $data['order-id']??''],
            ]);
        }
        
        //查询结果
        $temp=$user_data->first();
        
        return json_decode($temp['data'],true);
        
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