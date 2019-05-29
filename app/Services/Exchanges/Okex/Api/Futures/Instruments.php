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
        'GET';
        '/api/futures/v3/instruments';
        
        
    }
    
    /**
     * List all contracts. This request does not support pagination. The full list will be returned for a request.
     * 
        Parameters	Parameters Types	Required	Description
        instrument_id	String	Yes	Contract ID,e.g. “BTC-USD-180213”
        size	Int	No	The size of the price range (max: 200)
     * */
    static public function getBook(array $data=[]){
        'GET';
        '/api/futures/v3/instruments/'.$data['instrument_id'].'/book';
        unset($data['instrument_id']);
        
        
        
        
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