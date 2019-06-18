<?php
namespace App\Services\Exchanges;

use Illuminate\Http\Request;

class BaseServices
{
    protected $request;
    protected $path;
    
    //接口ID
    protected $id;
    //请求类型 get post delete ...
    protected $method;
    //请求交易接口地址
    protected $url;
    //请求的数据
    protected $data;
    //交易类型 spot future wasp
    protected $type;
    
    function __construct(Request $request){
        $this->request=$request;
        
        $this->method=strtolower($request->method());
        
        $this->data=$request->all();
        if(!empty($request->getContent())){
            parse_str($request->getContent(),$out);
            $this->data=array_merge($this->data,$out);
        }
        
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
                $this->type='future';
                break;
            }
            case 'binance':{
                $this->id=$temp[1];
                $this->type='spot';
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
        
        //记录过滤后的数据
        $this->path=$temp;
        
        //组装请求地址
        $this->url='/'.implode('/', $temp);
    }
}