<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Futures;


class Instruments
{
    /**
     * Get market data. This endpoint provides the snapshots of market data and can be used without verifications.
     * */
    static public function get(array $data=[]){
        $temp='[{
	"instrument_id": "BTC-USD-190531",
	"underlying_index": "BTC",
	"quote_currency": "USD",
	"tick_size": "0.01",
	"contract_val": "100",
	"listing": "2019-05-17",
	"delivery": "2019-05-31",
	"trade_increment": "1",
	"alias": "this_week"
}, {
	"instrument_id": "BTC-USD-190607",
	"underlying_index": "BTC",
	"quote_currency": "USD",
	"tick_size": "0.01",
	"contract_val": "100",
	"listing": "2019-05-24",
	"delivery": "2019-06-07",
	"trade_increment": "1",
	"alias": "next_week"
}, {
	"instrument_id": "BTC-USD-190628",
	"underlying_index": "BTC",
	"quote_currency": "USD",
	"tick_size": "0.01",
	"contract_val": "100",
	"listing": "2019-03-15",
	"delivery": "2019-06-28",
	"trade_increment": "1",
	"alias": "quarter"
}, {
	"instrument_id": "LTC-USD-190531",
	"underlying_index": "LTC",
	"quote_currency": "USD",
	"tick_size": "0.001",
	"contract_val": "10",
	"listing": "2019-05-17",
	"delivery": "2019-05-31",
	"trade_increment": "1",
	"alias": "this_week"
}]';
        $temp=json_decode($temp,true);
        
        return $temp;
    }
    
    /**
     * List all contracts. This request does not support pagination. The full list will be returned for a request.
     * 
        Parameters	Parameters Types	Required	Description
        instrument_id	String	Yes	Contract ID,e.g. “BTC-USD-180213”
        size	Int	No	The size of the price range (max: 200)
     * */
    static public function getBook(array $data=[]){
        $temp='{"bids":[["8346.72","20","0","5"],["8346.71","41","0","3"],["8346.7","8","0","1"],["8345.7","15","0","1"],["8345.69","4","0","1"],["8344.65","20","0","1"],["8344.31","4","0","1"],["8343.49","1","0","1"],["8343.36","5","0","1"],["8343.26","10","0","1"]],"asks":[["8346.75","85","0","3"],["8346.78","53","0","1"],["8346.85","19","0","3"],["8346.88","21","0","2"],["8347.72","140","0","1"],["8347.91","3","0","3"],["8348.42","2","0","2"],["8348.93","62","0","1"],["8349.04","40","0","1"],["8349.07","18","0","1"]],"timestamp":"2019-05-31T02:57:43.844Z"}';
        
        $temp=json_decode($temp,true);
        
        return $temp;
    }
    
    static public function getTickerAll(array $data){
        'GET';
        '';
        
        
    }
    
    static public function getTicker(array $data){
        'GET';
        '';
        
        
    }
    
    static public function getTrades(array $data){
        'GET';
        '';
        
        
    }
    
    static public function getCandles(array $data){
        'GET';
        '';
        
        
    }

    static public function getIndex(array $data){
        'GET';
        '';
        
        
    }
    
    static public function getEstimatedPrice(array $data){
        'GET';
        '';
        
        
    }
    
    static public function getOpenInterest(array $data){
        'GET';
        '';
        
        
    }
    
    static public function getPriceLimit(array $data){
        'GET';
        '';
        
        
    }
    
    static public function getMarkPrice(array $data){
        'GET';
        '';
        
        
    }
    
    static public function getLiquidation(array $data){
        'GET';
        '';
        
        
    }
}