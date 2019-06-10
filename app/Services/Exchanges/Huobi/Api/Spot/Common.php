<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Huobi\Api\Spot;

class Common extends Base
{
    /**
     *
     * */
    static public function getSymbols(array $data=[]){
        'GET';
        return '/v1/common/symbols';
        
        
    }
    
    /**
     *
     * */
    static public function getCurrencys(array $data=[]){
        'GET';
        return '/v1/common/currencys';
        
        
    }
    
    /**
     *
     * */
    static public function getTimestamp(array $data=[]){
        'GET';
        return '';
        
        
    }
}
