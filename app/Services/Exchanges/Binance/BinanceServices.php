<?php
/**
 * @author lin <465382251@qq.com>
 * */
namespace App\Services\Exchanges\Binance;

use App\Services\Exchanges\BaseServices;
use App\Services\Exchanges\Binance\Api\User;
use App\Services\Exchanges\Binance\Api\Trade;
use App\Services\Exchanges\Binance\Api\System;


class BinanceServices extends BaseServices
{
    /**
     * 接口映射
     * */
    protected function setMap(){
        
        switch ($this->method){
            case 'get':{
                if($this->url=="/api/v1/depth") return System::getDepth($this->data);
                if($this->url=="/api/v1/trades") return System::getTrades($this->data);
                if($this->url=="/api/v1/historicalTrades") return System::getHistoricalTrades($this->data);
                if($this->url=="/api/v1/aggTrades") return System::getAggTrades($this->data);
                if($this->url=="/api/v1/klines") return System::getKlines($this->data);
                if($this->url=="/api/v3/avgPrice") return System::getAvgPrice($this->data);
                if($this->url=="/api/v1/ticker/24hr") return [];
                if($this->url=="/api/v3/ticker/price") return System::getTickerPrice();
                if($this->url=="/api/v3/ticker/bookTicker") return System::getTickerBookTicker($this->data);
                if($this->url=="/api/v3/order") return User::getOrder($this->data);
                if($this->url=="/api/v3/openOrders") return User::getOpenOrders($this->data);
                if($this->url=="/api/v3/allOrders") return User::getAllOrders($this->data);
                if($this->url=="/api/v3/account") return User::getAccount($this->data);
                if($this->url=="/api/v3/myTrades") return User::getMyTrades($this->data);
            }
            case 'post':{
                if($this->url=="/api/v3/order") return Trade::postOrder($this->data);
            }
            case 'delete':{
                if($this->url=="/api/v3/order") return Trade::deleteOrder($this->data);
            }
        }
        
        return [];
    }
    
    public function run(){
        /* echo $this->id."\n";
        echo $this->method."\n";
        echo $this->url."\n";
        echo $this->type."\n";
        die; */
        //
        $map=(array) $this->setMap();
        return $map;
    }
}