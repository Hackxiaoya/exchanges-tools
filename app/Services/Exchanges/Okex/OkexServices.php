<?php
namespace App\Services\Exchanges\Okex;

use App\Services\Exchanges\BaseServices;
use App\Services\Exchanges\Okex\Api\Spot\Orders;
use App\Services\Exchanges\Okex\Api\Spot\Instruments;
use App\Services\Exchanges\Okex\Api\Spot\Accounts;
use App\Services\Exchanges\Okex\Api\Futures\Position;


class OkexServices extends BaseServices
{
    /**
     * 获取当前请求执行方法
     * */
    protected function getAction(){
        return strtolower($this->path[6]);
    }
    
    /**
     * 接口映射
     * */
    protected function setMap(){
        switch (strtolower($this->type)){
            case 'spot':{
                switch ($this->method){
                    case 'get':{
                        if($this->url=='/api/spot/v3/accounts') return Accounts::getAll($this->data);
                        if($this->url=="/api/spot/v3/orders") return [];
                        if($this->url=="/api/spot/v3/orders_pending") return [];
                        if($this->url=="/api/spot/v3/fills") return [];
                        if($this->url=="/api/spot/v3/instruments") return Instruments::get($this->data);
                        if($this->url=="/api/spot/v3/instruments/ticker") return [];
                        if($this->url=="/api/spot/v3/instruments/<instrument-id>/ticker") return [];
                        if($this->url=="/api/spot/v3/instruments/<instrument_id>/trades") return [];
                        if($this->url=="/api/spot/v3/instruments/<instrument_id>/candles") return [];
                        
                        
                        //api/spot/v3/accounts/<currency>
                        preg_match('/^\/api\/spot\/v3\/accounts\/([a-zA-Z\d]+)$/',$this->url,$match);
                        if(!empty($match)) return Accounts::get(array_merge($this->data,['currency'=>$match[1]]));
                        
                        //api/spot/v3/accounts/<currency>/ledger
                        preg_match('/^\/api\/spot\/v3\/accounts\/([a-zA-Z\d]+)\/ledger$/',$this->url,$match);
                        if(!empty($match)) return Accounts::getLedger(array_merge($this->data,['currency'=>$match[1]]));
                        
                        //api/spot/v3/orders/<order_id>
                        preg_match('/^\/api\/spot\/v3\/orders\/([a-zA-Z\d]+)$/',$this->url,$match);
                        if(!empty($match)) return Orders::get(array_merge($this->data,['order_id'=>$match[1]]));
                        
                        
                        //api/spot/v3/instruments/<instrument_id>/book
                        preg_match('/^\/api\/spot\/v3\/instruments\/(.*)\/book$/',$this->url,$match);
                        if(!empty($match)) return Instruments::getBook(array_merge($this->data,['instrument_id'=>$match[1]]));
                        
                    }
                    case 'post':{
                        if($this->url=='/api/spot/v3/orders') return Orders::post($this->data);
                        if($this->url=='/api/spot/v3/batch_orders') return [];
                        if($this->url=='/api/spot/v3/cancel_batch_orders') return [];
                        
                        //api/spot/v3/cancel_orders/<order_id>
                        preg_match('/^\/api\/spot\/v3\/cancel_orders\/([a-zA-Z\d]+)$/',$this->url,$match);
                        if(!empty($match)) return Orders::postCancel(array_merge($this->data,['order_id'=>$match[1]]));
                    }
                }
                break;
            }
            case 'future':{
                switch ($this->method){
                    case 'get':{
                        if($this->url=="/api/futures/v3/position") return Position::getAll($this->data);
                        if($this->url=="/api/futures/v3/accounts") return [];
                        if($this->url=="/api/futures/v3/accounts/{currency}") return [];
                        if($this->url=="/api/futures/v3/accounts/<currency>/leverage") return [];
                        if($this->url=="/api/futures/v3/accounts/<currency>/ledger") return [];
                        if($this->url=="/api/futures/v3/orders/<instrument_id>") return [];
                        
                        if($this->url=="/api/futures/v3/fills") return [];
                        if($this->url=="/api/futures/v3/instruments") return Instruments::get($this->data);
                        if($this->url=="/api/futures/v3/instruments/ticker") return [];
                        if($this->url=="/api/futures/v3/instruments/<instrument_id>/ticker") return [];
                        if($this->url=="/api/futures/v3/instruments/<instrument_id>/trades") return [];
                        
                        //api/futures/v3/<instrument_id>/position
                        preg_match('/^\/api\/futures\/v3\/([a-zA-Z\d]+)\/position$/',$this->url,$match);
                        if(!empty($match)) return Position::get(array_merge($this->data,['instrument_id'=>$match[1]]));
                        
                        //api/futures/v3/instruments/<instrument_id>/book
                        preg_match('/^\/api\/futures\/v3\/instruments\/([a-zA-Z\d]+)\/book$/',$this->url,$match);
                        if(!empty($match)) return Instruments::getBook(array_merge($this->data,['instrument_id'=>$match[1]]));
                        
                        ///api/futures/v3/orders/<instrument_id>/<order_id>
                        preg_match('/^\/api\/futures\/v3\/orders\/([a-zA-Z\d]+)\/([a-zA-Z\d]+)$/',$this->url,$match);
                        if(!empty($match)) return \App\Services\Exchanges\Okex\Api\Futures\Orders::get(array_merge($this->data,['instrument_id'=>$match[1],'order_id'=>$match[2]]));
                        
                    }
                    case 'post':{
                        if($this->url=="/api/futures/v3/accounts/<currency>/leverage") return [];
                        if($this->url=="/api/futures/v3/order") return \App\Services\Exchanges\Okex\Api\Futures\Orders::post($this->data);
                        if($this->url=="/api/futures/v3/orders") return [];
                        if($this->url=="/api/futures/v3/cancel_batch_orders/<instrument_id>") return [];
                        if($this->url=="/api/futures/v3/accounts/margin_mode") return [];
                        if($this->url=="/api/futures/v3/accounts/liqui_mode") return [];
                        if($this->url=="/api/futures/v3/close_position") return [];
                        if($this->url=="/api/futures/v3/cancel_all") return [];
                        
                        //api/futures/v3/cancel_order/<instrument_id>/<order_id>
                        preg_match('/^\/api\/futures\/v3\/cancel_order\/([a-zA-Z\d]+)\/([a-zA-Z\d]+)$/',$this->url,$match);
                        if(!empty($match)) return \App\Services\Exchanges\Okex\Api\Futures\Orders::postCancel(array_merge($this->data,['instrument_id'=>$match[1],'order_id'=>$match[2]]));
                    }
                    case 'delete':{
                        return;
                    }
                    case 'put':{
                        return;
                    }
                }
                break;
            }
            case 'account':{
                break;
            }
            case 'ett':{
                break;
            }
            case 'swap':{
                break;
            }
            case 'margin':{
                break;
            }
        }
        
        return [];
    }
    
    public function run(){
        $map=(array) $this->setMap();
        return $map;
    }
}