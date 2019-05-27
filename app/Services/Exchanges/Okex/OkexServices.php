<?php
namespace App\Services\Exchanges\Okex;

use App\Services\Exchanges\BaseServices;


class OkexServices extends BaseServices
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