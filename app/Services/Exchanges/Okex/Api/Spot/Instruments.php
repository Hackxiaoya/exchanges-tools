<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Spot;



class Instruments 
{
    static public function get(array $data=[]){
        return '/api/spot/v3/instruments';
    }
    
    static public function getBook(array $data=[]){
        return '/api/spot/v3/instruments/'.$data['instrument_id'].'/book';
        unset($data['instrument_id']);
    }
    
    static public function getTickerAll(array $data=[]){
    }
    
    static public function getTicker(array $data=[]){

    }
    
    static public function getTrades(array $data=[]){

    }
    
    static public function getCandles(array $data=[]){

    }
}