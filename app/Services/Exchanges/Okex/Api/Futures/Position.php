<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Futures;



class Position
{
    /**
     * Get the information of all holding positions in futures trading.Due to high energy consumption, you are advised to capture data with the "Futures Account of a Currency" API instead.
     * 
     * */
    static public function getAll(array $data=[]){
        'GET';
        return '/api/futures/v3/position';
    }
    
    /**
     * Get the information of holding positions of a contract.
     * 
        Parameters	Parameters Types	Required	Description
        instrument_id	String	Yes	Contract ID, e.g.“BTC-USD-180213”
     * */
    static public function get(array $data=[]){
        'GET';
        return '/api/futures/v3/'.$data['instrument_id'].'/position';
    }
}