<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Spot;





class Accounts 
{
    static public function getAll(array $data=[]){
        return '/api/spot/v3/accounts';
    }
    
    /**
     'currency'=>'BTC',   required
     * */
    static public function get(array $data=[]){
        return '/api/spot/v3/accounts/'.$data['currency'];
    }
    
    /**
     *  'currency'=>'BTC',   required
     *  'limit'=>2,             optional
     *  'form'                    optional
     *  'to'                        optional
     * */
    static public function getLedger(array $data=[]){
        return '/api/spot/v3/accounts/'.$data['currency'].'/ledger';
        unset($data['currency']);
    }
    
}