<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Binance\Api;

class System extends Base
{
    /**
     * 测试服务器连通性 PING
    GET /api/v1/ping
     * */
    static public function getPing(array $data=[]){
        'GET';
        return '/api/v1/ping';
        
        
    }
    
    /**
     *获取服务器时间
    GET /api/v1/time
     * */
    static public function getTime(array $data=[]){
        'GET';
        return '/api/v1/time';
        
        
    }
    
    /**
     *交易规范信息
    GET /api/v1/exchangeInfo
     * */
    static public function getExchangeInfo(array $data=[]){
        'GET';
        return '/api/v1/exchangeInfo';
        
        
    }
    
    /**
     *深度信息
    GET /api/v1/depth
    
    symbol	STRING	YES	
    limit	INT	NO	默认 100; 最大 1000. 可选值:[5, 10, 20, 50, 100, 500, 1000]
     * */
    static public function getDepth(array $data=[]){
        $temp='{"lastUpdateId":667135119,"bids":[["8680.02000000","0.01198500"],["8680.00000000","4.53547000"],["8677.26000000","0.00613000"],["8677.23000000","0.02534500"],["8677.22000000","0.11764400"],["8676.20000000","0.32277900"],["8676.19000000","0.20000000"],["8675.91000000","0.05221300"],["8675.56000000","0.07937400"],["8674.74000000","0.07040400"],["8674.73000000","0.80000000"],["8674.72000000","0.00000200"],["8674.09000000","0.06183500"],["8674.07000000","0.18711800"],["8674.01000000","0.97887000"],["8673.68000000","0.50000000"],["8673.65000000","3.00000000"],["8673.51000000","0.20707000"],["8673.50000000","0.10990100"],["8673.17000000","0.00126800"]],"asks":[["8680.19000000","0.10390100"],["8680.20000000","0.02065300"],["8681.69000000","0.50000000"],["8682.10000000","0.69167000"],["8682.38000000","0.12298200"],["8682.39000000","1.00000000"],["8682.97000000","0.29040700"],["8683.08000000","0.00689300"],["8683.10000000","0.02000000"],["8683.22000000","0.53575600"],["8683.43000000","0.00073000"],["8683.57000000","0.00417500"],["8684.09000000","0.29251600"],["8684.65000000","0.02130000"],["8684.67000000","0.13830500"],["8684.72000000","1.73813400"],["8684.92000000","1.29133000"],["8684.93000000","0.00424900"],["8685.00000000","3.20421400"],["8685.21000000","0.09566100"]]}';
        $temp=json_decode($temp,true);
        return $temp;
    }
    
    /**
     *近期成交
    GET /api/v1/trades
    
    symbol	STRING	YES	
    limit	INT	NO	Default 500; max 1000.
     * */
    static public function getTrades(array $data=[]){
        $temp='[{"id":130896024,"price":"8684.06000000","qty":"0.01375900","quoteQty":"119.48398154","time":1559532475116,"isBuyerMaker":true,"isBestMatch":true},{"id":130896025,"price":"8684.04000000","qty":"0.00263000","quoteQty":"22.83902520","time":1559532475858,"isBuyerMaker":true,"isBestMatch":true},{"id":130896026,"price":"8684.04000000","qty":"0.00801300","quoteQty":"69.58521252","time":1559532476001,"isBuyerMaker":true,"isBestMatch":true},{"id":130896027,"price":"8684.31000000","qty":"0.10000000","quoteQty":"868.43100000","time":1559532476300,"isBuyerMaker":false,"isBestMatch":true},{"id":130896028,"price":"8684.04000000","qty":"0.00484500","quoteQty":"42.07417380","time":1559532476870,"isBuyerMaker":true,"isBestMatch":true},{"id":130896029,"price":"8684.06000000","qty":"0.02654400","quoteQty":"230.50968864","time":1559532477861,"isBuyerMaker":true,"isBestMatch":true},{"id":130896030,"price":"8684.06000000","qty":"0.00177000","quoteQty":"15.37078620","time":1559532478010,"isBuyerMaker":true,"isBestMatch":true},{"id":130896031,"price":"8684.06000000","qty":"0.09598900","quoteQty":"833.57423534","time":1559532478017,"isBuyerMaker":true,"isBestMatch":true},{"id":130896032,"price":"8684.31000000","qty":"0.01150800","quoteQty":"99.93903948","time":1559532478367,"isBuyerMaker":false,"isBestMatch":true},{"id":130896033,"price":"8684.31000000","qty":"0.01150800","quoteQty":"99.93903948","time":1559532478480,"isBuyerMaker":false,"isBestMatch":true},{"id":130896034,"price":"8684.31000000","qty":"0.04382500","quoteQty":"380.58988575","time":1559532478569,"isBuyerMaker":false,"isBestMatch":true},{"id":130896035,"price":"8684.31000000","qty":"0.01795900","quoteQty":"155.96152329","time":1559532478683,"isBuyerMaker":false,"isBestMatch":true},{"id":130896036,"price":"8684.31000000","qty":"0.04172100","quoteQty":"362.31809751","time":1559532478777,"isBuyerMaker":false,"isBestMatch":true},{"id":130896037,"price":"8684.06000000","qty":"0.01063200","quoteQty":"92.32892592","time":1559532478787,"isBuyerMaker":true,"isBestMatch":true},{"id":130896038,"price":"8684.06000000","qty":"0.04386400","quoteQty":"380.91760784","time":1559532478893,"isBuyerMaker":true,"isBestMatch":true},{"id":130896039,"price":"8684.05000000","qty":"0.00132900","quoteQty":"11.54110245","time":1559532480536,"isBuyerMaker":true,"isBestMatch":true},{"id":130896040,"price":"8684.06000000","qty":"0.00139200","quoteQty":"12.08821152","time":1559532484752,"isBuyerMaker":true,"isBestMatch":true},{"id":130896041,"price":"8684.06000000","qty":"0.00230000","quoteQty":"19.97333800","time":1559532485022,"isBuyerMaker":true,"isBestMatch":true},{"id":130896042,"price":"8684.30000000","qty":"0.00230000","quoteQty":"19.97389000","time":1559532485030,"isBuyerMaker":false,"isBestMatch":true},{"id":130896043,"price":"8684.30000000","qty":"0.02161000","quoteQty":"187.66772300","time":1559532485119,"isBuyerMaker":false,"isBestMatch":true}]';
        $temp=json_decode($temp,true);
        return $temp;
    }
    
    /**
     *查询历史成交(MARKET_DATA)
    GET /api/v1/historicalTrades
     * */
    static public function getHistoricalTrades(array $data=[]){
        'GET';
        return '/api/v1/historicalTrades';
        
        
    }
    
    /**
     *近期成交(归集)
    GET /api/v1/aggTrades
    
    symbol	STRING	YES	
    fromId	LONG	NO	从包含fromID的成交开始返回结果
    startTime	LONG	NO	从该时刻之后的成交记录开始返回结果
    endTime	LONG	NO	返回该时刻为止的成交记录
    limit	INT	NO	默认 500; 最大 1000.
     * */
    static public function getAggTrades(array $data=[]){
        'GET';
        return '/api/v1/aggTrades';
        
        
    }
    
    /**
     *K线数据
    GET /api/v1/klines
     * */
    static public function getKlines(array $data=[]){
        'GET';
        return '/api/v1/klines';
        
        
    }
    
    /**
     *当前平均价格
    GET /api/v3/avgPrice
    Name	Type	Mandatory	Description
    symbol	STRING	YES	
     * */
    static public function getAvgPrice(array $data=[]){
        $temp='{"mins":5,"price":"8688.61091440"}';
        $temp=json_decode($temp,true);
        return $temp;
    }
    
    /**
     *系统状态 (System)
    GET /wapi/v3/systemStatus.html
     * */
    static public function getSystemStatus(array $data=[]){
        'GET';
        return '/wapi/v3/systemStatus.html';
        
        
    }
    
    /**
     *24hr价格变动情况
    GET /api/v1/ticker/24hr
     * */
    static public function get24hr(array $data=[]){
        'GET';
        return '/api/v1/ticker/24hr';
        
        
    }
    
    /**
     * 最新价格接口
    GET /api/v3/ticker/price
     * */
    static public function getTickerPrice(array $data=[]){
        'GET';
        return '/api/v3/ticker/price';
        
        
    }
    
    /**
     *最优挂单接口
    GET /api/v3/ticker/bookTicker
     * */
    static public function getTickerBookTicker(array $data=[]){
        'GET';
        return '/api/v3/ticker/bookTicker';
        
        
    }
}