<?php
/**
 * @author lin <465382251@qq.com>
 * 
 * Most of them are unfinished and need your help
 * https://github.com/zhouaini528/bitmex-php.git
 * */

namespace App\Services\Exchanges\Bitmex\Api;

use App\Models\Api;
use App\Models\UserData;

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
        $mirroring=self::getMirroring();
        $temp=json_decode($mirroring->data,true);
        
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
        $mirroring=self::getMirroring();
        
        $user_data=UserData::where('user_id',self::$uid)
        ->where('user_strategy_id',0);
        
        
        if (isset($data['filter'])){
            $filter=json_decode($data['filter'],true);
            
            if(isset($filter['orderID']) && !empty($filter['orderID'])){
                $user_data->where([
                    ['data->orderID', 'like', $filter['orderID']??''],
                ]);
            }
            
            if(isset($filter['clOrdID']) && !empty($filter['clOrdID'])){
                $user_data->where([
                    ['data->clOrdID', 'like', $filter['clOrdID']??''],
                ]);
            }
        }
            
        if(isset($data['symbol']) && !empty($data['symbol'])) {
            $user_data->where([
                ['data->symbol', 'like', $data['symbol']],
            ]);
        }
        
        $temp=$user_data->get();
        
        $get_data=[];
        foreach ($temp as $k=>$v){
            if(empty($v)) continue;
            $get_data[]=json_decode($v['data'],true);
        }
        
        if(empty($get_data)) return [];
        
        return $get_data;
    }
    
    static public function put(array $data=[]){
        $mirroring=self::getMirroring();
        
        $user_data=UserData::where('user_id',self::$uid)
        ->where('user_strategy_id',0);
        

        if(isset($data['orderID'])  && !empty($data['orderID'])){
            $user_data->where([
                ['data->orderID', 'like', $data['orderID']??''],
            ]);
        }
        
        if(isset($data['clOrdID'])   && !empty($data['clOrdID'])){
            $user_data->where([
                ['data->clOrdID', 'like', $data['clOrdID']??''],
            ]);
        }
        
        //查询结果
        $temp=$user_data->first();
        if(empty($temp)) return [];
        $get_data=json_decode($temp['data'],true);
        
        //修改数据
        $now_data=array_merge($get_data,$data);
        
        $temp->data=json_encode($now_data);
        $temp->save();
        
        return $get_data;
    }
    
    /**
     * /api/v1/order
     * */
    static public function post(array $data=[]){
        $temp=self::template($data);
        
        $temp['orderID']=strtolower(str_random(8).'-'.rand(1000,9999).'-'.rand(1000,9999).'-'.str_random(4).'-'.str_random(12));
        
        
        
        UserData::create([
            'api_id'=>self::$mirroring->id,
            'user_id'=>self::$uid,
            'user_strategy_id'=>0,
            'data'=>json_encode($temp),
        ]);
        
        return $temp;
    }
    
    /**
     * 
     * */
    static public function delete(array $data=[]){
        $mirroring=self::getMirroring();
        
        $user_data=UserData::where('user_id',self::$uid)
        ->where('user_strategy_id',0);
        
        
        if(isset($data['orderID'])  && !empty($data['orderID'])){
            $user_data->where([
                ['data->orderID', 'like', $data['orderID']??''],
            ]);
        }
        
        if(isset($data['clOrdID']) && !empty($data['clOrdID'])){
            $user_data->where([
                ['data->clOrdID', 'like', $data['clOrdID']??''],
            ]);
        }
        
        //查询结果
        $temp=$user_data->first();
        if(empty($temp)) throw new \Exception('Order does not exist');
        $get_data=json_decode($temp['data'],true);
        
        if(!in_array($get_data['ordStatus'], ['Canceled','Filled','SystemError'])) $get_data['ordStatus']='Canceled';
        
        return [$get_data];
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