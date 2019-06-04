<?php
namespace App\Services\Exchanges\Huobi;

use App\Services\Exchanges\BaseServices;
use App\Services\Exchanges\Huobi\Api\Spot\Order;
use App\Services\Exchanges\Huobi\Api\Spot\Account;
use App\Services\Exchanges\Huobi\Api\Spot\Margin;
use App\Services\Exchanges\Huobi\Api\Spot\Market;
use App\Services\Exchanges\Huobi\Api\Spot\Common;


class HuobiServices extends BaseServices
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
                        if($this->url=="/market/history/kline") return [];
                        if($this->url=="/market/detail/merged") return [];
                        if($this->url=="/market/tickers") return [];
                        if($this->url=="/market/depth") return Market::getDepth($this->data);
                        if($this->url=="/market/trade") return Market::getTrade($this->data);
                        if($this->url=="/market/history/trade") return Market::getHistoryTrade($this->data);
                        if($this->url=="/market/detail") return Market::getDetail($this->data);
                        if($this->url=="/v1/common/symbols") return Common::getSymbols($this->data);
                        if($this->url=="/v1/common/currencys") return Common::getCurrencys($this->data);
                        if($this->url=="/v1/common/timestamp") return Common::getTimestamp($this->data);
                        if($this->url=="/v1/account/accounts") return Account::get($this->data);
                        if($this->url=="/v1/order/orders") return [];
                        if($this->url=="/v1/order/history") return [];
                        if($this->url=="/v1/order/matchresults") return [];
                        if($this->url=="/v1/order/openOrders") return [];
                        if($this->url=="/v1/query/deposit-withdraw") return [];
                        if($this->url=="/v1/margin/loan-orders") return [];
                        if($this->url=="/v1/margin/accounts/balance") return [];
                        if($this->url=="/etf/swap/config") return [];
                        if($this->url=="/etf/list") return [];
                        if($this->url=="/quotation/market/history/kline") return [];
                        if($this->url=="/v1/subuser/aggregate-balance") return [];
                        
                        //GET /v1/account/accounts/{account-id}/balance
                        preg_match('/^\/v1\/account\/accounts\/([\d]+)\/balance$/',$this->url,$match);
                        if(!empty($match)) return Account::getBalance(array_merge($this->data,['account-id'=>$match[1]]));
                        
                        //GET /v1/order/orders/{order-id}
                        preg_match('/^\/v1\/order\/orders\/([a-zA-Z\d]+)$/',$this->url,$match);
                        if(!empty($match)) return Order::get(array_merge($this->data,['order-id'=>$match[1]]));
                        
                        //GET /v1/order/orders/{order-id}/matchresults
                        preg_match('/^\/v1\/order\/orders\/(.*)\/matchresults$/',$this->url,$match);
                        if(!empty($match)) return Order::getMatchresults(array_merge($this->data,['order-id'=>$match[1]]));
                        
                        //GET /v1/account/accounts/{sub-uid}
                        preg_match('/^\/v1\/account\/accounts\/([a-zA-Z\d]+)$/',$this->url,$match);
                        if(!empty($match)) return Account::getSubuser(array_merge($this->data,['sub-uid'=>$match[1]]));
                    }
                    case 'post':{
                        if($this->url=="/v1/order/orders/place") return Order::postPlace($this->data);
                        if($this->url=="/v1/order/orders/batchcancel") return Order::postBatchCancel($this->data);
                        if($this->url=="/v1/order/orders/batchCancelOpenOrders") return Order::postBatchCancelOpenOrders($this->data);
                        if($this->url=="/v1/dw/withdraw/api/create") return [];
                        if($this->url=="/v1/dw/transfer-in/margin") return [];
                        if($this->url=="/v1/dw/transfer-out/margin") return [];
                        if($this->url=="/v1/margin/orders") return [];
                        if($this->url=="/etf/swap/in") return [];
                        if($this->url=="/etf/swap/out") return [];
                        if($this->url=="/v1/subuser/transfer") return [];
                        
                        
                        //POST /v1/order/orders/{order-id}/submitcancel
                        preg_match('/^\/v1\/order\/orders\/(.*)\/submitcancel$/',$this->url,$match);
                        if(!empty($match)) return Order::postSubmitCancel(array_merge($this->data,['order-id'=>$match[1]]));
                        
                        //POST /v1/dw/withdraw-virtual/{withdraw-id}/cancel
                        //preg_match('/^\/v1\/dw\/withdraw-virtual\/{withdraw-id}\/cancel$/',$this->url,$match);
                        //if(!empty($match)) return (array_merge($this->data,['withdraw-id'=>$match[1]]));
                        
                        //POST /v1/margin/orders/{order-id}/repay
                        preg_match('/^\/v1\/margin\/orders\/(.*)\/repay$/',$this->url,$match);
                        if(!empty($match)) return Margin::postOrdersRepay(array_merge($this->data,['order-id'=>$match[1]]));
                    }
                }
                break;
            }
            case 'future':{
                
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