<?php
namespace App\Services\Exchanges\Huobi;

use App\Services\Exchanges\BaseServices;


class HuobiServices extends BaseServices
{
    public function run(){
        echo $this->id."\n";
        echo $this->method."\n";
        echo $this->url."\n";
        echo $this->type."\n";
        die;
        dd($this->request);
    }
}