<?php
/**
 * @author lin <465382251@qq.com>
 * 
 * Most of them are unfinished and need your help
 * https://github.com/zhouaini528/bitmex-php.git
 * */

namespace App\Services\Exchanges\Bitmex\Api;

class Order   extends Base
{
    /**
     * 订单模板
     * */
    static protected function template($data){
        $temp='{
	"orderID": "069bc5ef-1040-7952-948f-e26ad8673825",
	"clOrdID": "",
	"clOrdLinkID": "",
	"account": 155761,
	"symbol": "XBTUSD",
	"side": "Buy",
	"simpleOrderQty": null,
	"orderQty": 100,
	"price": 100,
	"displayQty": null,
	"stopPx": null,
	"pegOffsetValue": null,
	"pegPriceType": "",
	"currency": "USD",
	"settlCurrency": "XBt",
	"ordType": "Limit",
	"timeInForce": "GoodTillCancel",
	"execInst": "",
	"contingencyType": "",
	"exDestination": "XBME",
	"ordStatus": "New",
	"triggered": "",
	"workingIndicator": true,
	"ordRejReason": "",
	"simpleLeavesQty": null,
	"leavesQty": 1,
	"simpleCumQty": null,
	"cumQty": 0,
	"avgPx": null,
	"multiLegReportingType": "SingleSecurity",
	"text": "Submitted via API.",
	"transactTime": "2019-05-28T08:26:26.819Z",
	"timestamp": "2019-05-28T08:26:26.819Z"
}';
        $temp=json_decode($temp,true);
        
        if(isset($data['symbol'])) $temp['symbol']=$data['symbol'];
        if(isset($data['price'])) $temp['price']=$data['price'];
        if(isset($data['side'])) $temp['side']=$data['side'];
        if(isset($data['orderQty'])) $temp['orderQty']=$data['orderQty'];
        if(isset($data['ordType'])) $temp['ordType']=$data['ordType'];
        
        if(isset($data['orderID'])) $temp['orderID']=$data['orderID'];
        if(isset($data['clOrdID'])) $temp['clOrdID']=$data['clOrdID'];
        
        //随机状态
        return self::randStatus($temp);
    }
    
    /**
     *          '/api/v1/order';
     * */
    static public function get(array $data=[]){
        $temp='[{
	"orderID": "eff6abee-d98c-9717-a29d-91234fb5c833",
	"clOrdID": "",
	"clOrdLinkID": "",
	"account": 155761,
	"symbol": "XBTUSD",
	"side": "Buy",
	"simpleOrderQty": null,
	"orderQty": 2,
	"price": 200,
	"displayQty": null,
	"stopPx": null,
	"pegOffsetValue": null,
	"pegPriceType": "",
	"currency": "USD",
	"settlCurrency": "XBt",
	"ordType": "Limit",
	"timeInForce": "GoodTillCancel",
	"execInst": "",
	"contingencyType": "",
	"exDestination": "XBME",
	"ordStatus": "Canceled",
	"triggered": "",
	"workingIndicator": false,
	"ordRejReason": "",
	"simpleLeavesQty": null,
	"leavesQty": 0,
	"simpleCumQty": null,
	"cumQty": 0,
	"avgPx": null,
	"multiLegReportingType": "SingleSecurity",
	"text": "Canceled: Canceled via API.\nSubmitted via API.",
	"transactTime": "2019-05-28T09:18:38.321Z",
	"timestamp": "2019-05-28T09:18:39.405Z"
}, {
	"orderID": "069bc5ef-1040-7952-948f-e26ad8673825",
	"clOrdID": "",
	"clOrdLinkID": "",
	"account": 155761,
	"symbol": "XBTUSD",
	"side": "Buy",
	"simpleOrderQty": null,
	"orderQty": 1,
	"price": 100,
	"displayQty": null,
	"stopPx": null,
	"pegOffsetValue": null,
	"pegPriceType": "",
	"currency": "USD",
	"settlCurrency": "XBt",
	"ordType": "Limit",
	"timeInForce": "GoodTillCancel",
	"execInst": "",
	"contingencyType": "",
	"exDestination": "XBME",
	"ordStatus": "New",
	"triggered": "",
	"workingIndicator": true,
	"ordRejReason": "",
	"simpleLeavesQty": null,
	"leavesQty": 1,
	"simpleCumQty": null,
	"cumQty": 0,
	"avgPx": null,
	"multiLegReportingType": "SingleSecurity",
	"text": "Submitted via API.",
	"transactTime": "2019-05-28T08:26:26.819Z",
	"timestamp": "2019-05-28T08:26:26.819Z"
}]';
        
        $temp=json_decode($temp,true);
        foreach ($temp as $k=>$v){
            if(isset($data['symbol'])) $temp[$k]['symbol']=$data['symbol'];
            if(isset($data['price'])) $temp[$k]['price']=$data['price'];
            if(isset($data['side'])) $temp[$k]['side']=$data['side'];
            if(isset($data['orderQty'])) $temp[$k]['orderQty']=$data['orderQty'];
            if(isset($data['ordType'])) $temp[$k]['ordType']=$data['ordType'];
            
            if(isset($data['orderID'])) $temp[$k]['orderID']=$data['orderID'];
            if(isset($data['clOrdID'])) $temp[$k]['clOrdID']=$data['clOrdID'];
            
            //随机状态
            $temp[$k]= self::randStatus($temp[$k]);
        }
        
        return $temp;
    }
    
    static public function put(array $data=[]){
        return self::template($data);
    }
    
    /**
     * /api/v1/order
     * */
    static public function post(array $data=[]){
        return [self::$url];
        return self::template($data);
    }
    
    /**
     * 
     * */
    static public function delete(array $data=[]){
        
        $temp=self::template($data);
        $temp['ordStatus']='Canceled';
        
        return $temp;
    }
    
    /**
     *
     * */
    static public function deleteAll(array $data=[]){
        return '/api/v1/order/all';
    }
    
    static public function putBulk(array $data=[]){
        return '';
    }
    
    static public function postBulk(array $data=[]){
        return '';
    }
    
    static public function postCancelAllAfter(array $data=[]){
        return '';
    }
    
    static public function postClosePosition(array $data=[]){
        return '';
    }
}