<?php
namespace App\Services\Exchanges;

use Illuminate\Http\Request;

class BaseServices
{
    protected $request;
    
    //接口ID
    protected $id;
    //请求类型 get post delete ...
    protected $method;
    //请求交易接口地址
    protected $url;
    //交易类型 spot future wasp
    protected $type;
    
    function __construct(Request $request){
        $this->request=$request;
        
        $this->method=$request->method();
        
        $this->setProtected();
    }
    
    /**
     * 设置全局参数
     * */
    private function setProtected(){
        $temp=explode('/', $this->request->path());
        
        switch (strtolower($temp[0])){
            case 'bitmex':{
                $this->id=$temp[1];
                break;
            }
            case 'binance':{
                $this->id=$temp[1];
                break;
            }
            case 'huobi':{
                $this->id=$temp[2];
                $this->type=$temp[1];
                unset($temp[2]);
                break;
            }
            case 'okex':{
                $this->id=$temp[2];
                $this->type=$temp[1];
                unset($temp[2]);
                break;
            }
            default:;
        }
        unset($temp[0]);
        unset($temp[1]);
        
        //组装请求地址
        $this->url=implode('/', $temp);
    }
}