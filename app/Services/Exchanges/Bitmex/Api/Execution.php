<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Execution extends Base
{
    static public  function get(array $data=[]){

        return '/api/v1/execution';

    }
    
    static public  function getTradeHistory(array $data=[]){

        return '/api/v1/execution/tradeHistory';

    }
}