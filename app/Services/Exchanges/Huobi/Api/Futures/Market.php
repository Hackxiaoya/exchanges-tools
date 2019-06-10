<?php
/**
 * @author lin <465382251@qq.com>
 * */
namespace App\Services\Exchanges\Huobi\Api\Futures;

class Market extends Base
{
    /**
     * 获取行情深度数据
     * symbol	string	true	如"BTC_CW"表示BTC当周合约，"BTC_NW"表示BTC次周合约，"BTC_CQ"表示BTC季度合约
        type	string	true	(150档数据) step0, step1, step2, step3, step4, step5（合并深度1-5）；
        step0时，不合并深度, (20档数据) step6, step7, step8, step9, step10, step11（合并深度7-11）；
        step6时，不合并深度
     * */
    static public function getDepth(array $data){
        'GET';
        '/market/depth';
        
        $data['type'] = $data['type'] ?? '';
        
        
        
    }
    
    static public function getHistoryKline(array $data){
        'GET';
        '/market/history/kline';
        
        
    }
    
    static public function getDetailMerged(array $data){
        'GET';
        '';
        
        
    }
    
    /**
     * 获取市场最近成交记录
     * symbol	true	string	合约名称	如"BTC_CW"表示BTC当周合约，"BTC_NW"表示BTC次周合约，"BTC_CQ"表示BTC季度合约
     * */
    static public function getTrade(array $data){
        'GET';
        '/market/trade';
        
        
    }
    
    /**
     * 批量获取最近的交易记录
     * symbol	true	string	合约名称		如"BTC_CW"表示BTC当周合约，"BTC_NW"表示BTC次周合约，"BTC_CQ"表示BTC季度合约
        size	false	number	获取交易记录的数量	1	[1, 2000]
     * */
    static public function getHistoryTrade(array $data){
        'GET';
        '/market/history/trade';
        
        $data['size'] = $data['size'] ?? 200;
        
        
        
    }
}