<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Liquidation   extends Base
{
    static public  function get($data)
    {
        $this->type='GET';
        return '/api/v1/liquidation';
        $this->data=$data;
        
        
    }
}
