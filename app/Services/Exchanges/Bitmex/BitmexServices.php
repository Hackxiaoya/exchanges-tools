<?php
namespace App\Services\Exchanges\Bitmex;

use App\Services\Exchanges\BaseServices;


class BitmexServices extends BaseServices
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