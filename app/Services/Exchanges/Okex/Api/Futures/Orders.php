<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Futures;


class Orders
{
    /**
     * */
    static public function post(array $data=[]){
        'POST';
        return '/api/futures/v3/order';
        
        $data['leverage']=$data['leverage']??10;
    }
    
    static public function postBatch(array $data=[]){
    }
    
    /**
     * 
     * */
    static public function postCancel(array $data=[]){
        $id=$data['order_id'] ?? $data['client_oid'];
        unset($data['order_id']);
        unset($data['client_oid']);
        
        return '/api/futures/v3/cancel_order/'.$data['instrument_id'].'/'.$id;
    }
    
    static public function postCancelBatch(array $data=[]){
        
    }
    
    static public function getAll(array $data=[]){
        
    }
    
    /**
     * 
     * */
    static public function get(array $data=[]){
        $id=$data['order_id'] ?? $data['client_oid'];
        unset($data['order_id']);
        unset($data['client_oid']);
        
        'GET';
        return '/api/futures/v3/orders/'.$data['instrument_id'].'/'.$id;
    }
}