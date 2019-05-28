<?php
/**
 * @author lin <465382251@qq.com>
 * 
 * Most of them are unfinished and need your help
 * https://github.com/zhouaini528/bitmex-php.git
 * */

namespace App\Services\Exchanges\Bitmex\Api;

class Order  
{
    static public function get(array $data=[]){
        return '/api/v1/order';
    }
    
    static public function put(array $data=[]){
        return '/api/v1/order';
    }
    
    /**
     * 
     * */
    static public function post(array $data=[]){
        return '/api/v1/order';
    }
    
    /**
     * 
     * */
    static public function delete(array $data=[]){
        return '/api/v1/order';
    }
    
    /**
     *
     * */
    static public function deleteAll(array $data=[]){
        return '/api/v1/order/all';
    }
    
    static public function putBulk(array $data=[]){
        return '';
    }
    
    static public function postBulk(array $data=[]){
        return '';
    }
    
    static public function postCancelAllAfter(array $data=[]){
        return '';
    }
    
    static public function postClosePosition(array $data=[]){
        return '';
    }
}