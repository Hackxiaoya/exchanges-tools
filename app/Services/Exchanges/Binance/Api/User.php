<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Binance\Api;

class User  extends Base
{
    /**
     * 查看账户当前挂单 (USER_DATA)
    GET /api/v3/openOrders  (HMAC SHA256)
     * */
    static public function getOpenOrders(array $data=[]){
        'GET';
        return '/api/v3/openOrders';
        
        
    }
    
    /**
     *查询所有订单（包括历史订单） (USER_DATA)
    GET /api/v3/allOrders (HMAC SHA256)
    
    Name	Type	Mandatory	Description
    symbol	STRING	YES	
    orderId	LONG	NO	只返回此orderID之后的订单，缺省返回最近的订单
    startTime	LONG	NO	
    endTime	LONG	NO	
    limit	INT	NO	Default 500; max 1000.
    recvWindow	LONG	NO	
    timestamp	LONG	YES	
     * */
    static public function getAllOrders(array $data=[]){
        
        $temp='[{
	"symbol": "BTCUSDT",
	"orderId": 406053006,
	"clientOrderId": "yuAamK3rTLS00rHOZjOr6C",
	"price": "7000.00000000",
	"origQty": "0.01428500",
	"executedQty": "0.00000000",
	"cummulativeQuoteQty": "0.00000000",
	"status": "CANCELED",
	"timeInForce": "GTC",
	"type": "LIMIT",
	"side": "BUY",
	"stopPrice": "0.00000000",
	"icebergQty": "0.00000000",
	"time": 1559210918710,
	"updateTime": 1559211130338,
	"isWorking": true
}, {
	"symbol": "BTCUSDT",
	"orderId": 406053110,
	"clientOrderId": "y4Edw90BkfrZ5Cfc88h3Q8",
	"price": "7000.00000000",
	"origQty": "0.00259700",
	"executedQty": "0.00000000",
	"cummulativeQuoteQty": "0.00000000",
	"status": "CANCELED",
	"timeInForce": "GTC",
	"type": "LIMIT",
	"side": "BUY",
	"stopPrice": "0.00000000",
	"icebergQty": "0.00000000",
	"time": 1559210922020,
	"updateTime": 1559211130328,
	"isWorking": true
}, {
	"symbol": "BTCUSDT",
	"orderId": 406053223,
	"clientOrderId": "jRLXyBX9PV9QM5ZyjunNVw",
	"price": "8000.00000000",
	"origQty": "0.01022700",
	"executedQty": "0.00000000",
	"cummulativeQuoteQty": "0.00000000",
	"status": "CANCELED",
	"timeInForce": "GTC",
	"type": "LIMIT",
	"side": "BUY",
	"stopPrice": "0.00000000",
	"icebergQty": "0.00000000",
	"time": 1559210925806,
	"updateTime": 1559211130322,
	"isWorking": true
}, {
	"symbol": "BTCUSDT",
	"orderId": 407174980,
	"clientOrderId": "C4gXZ6NAndvf6LW8dw2yd5",
	"price": "0.00000000",
	"origQty": "0.00360300",
	"executedQty": "0.00360300",
	"cummulativeQuoteQty": "29.97984240",
	"status": "FILLED",
	"timeInForce": "GTC",
	"type": "MARKET",
	"side": "BUY",
	"stopPrice": "0.00000000",
	"icebergQty": "0.00000000",
	"time": 1559251050187,
	"updateTime": 1559251050187,
	"isWorking": true
}]';
        
        $temp=json_decode($temp,true);
        
        foreach ($temp as $k =>$v){
            if(isset($data['symbol'])) $temp[$k]['symbol']=$data['symbol'];
        }
        
        return $temp;
    }
    
    /**
     *查询订单 (USER_DATA)
    GET /api/v3/order (HMAC SHA256)
    
    Name	Type	Mandatory	Description
    symbol	STRING	YES	
    orderId	LONG	NO	
    origClientOrderId	STRING	NO	
    recvWindow	LONG	NO	
    timestamp	LONG	YES	
     * */
    static public function getOrder(array $data){
        $temp='{
	"symbol": "BTCUSDT",
	"orderId": 413506601,
	"clientOrderId": "OBlK5RMWGHfbTGbNAsdABa",
	"price": "2000.00000000",
	"origQty": "0.01000000",
	"executedQty": "0.00000000",
	"cummulativeQuoteQty": "0.00000000",
	"status": "NEW",
	"timeInForce": "GTC",
	"type": "LIMIT",
	"side": "BUY",
	"stopPrice": "0.00000000",
	"icebergQty": "0.00000000",
	"time": 1559530911762,
	"updateTime": 1559530911762,
	"isWorking": true
}';
        
        $temp=json_decode($temp,true);
        
        if(isset($data['symbol'])) $temp['symbol']=$data['symbol'];
        if(isset($data['orderId'])) $temp['orderId']=$data['orderId'];
        if(isset($data['origClientOrderId'])) $temp['origClientOrderId']=$data['origClientOrderId'];
        
        $temp=self::randStatus($temp);
        
        return $temp;
    }
    
    /**
     *账户信息 (USER_DATA)
    GET /api/v3/account (HMAC SHA256)
    
    Name	Type	Mandatory	Description
    recvWindow	LONG	NO	
    timestamp	LONG	YES	
     * */
    static public function getAccount(array $data=[]){
        $temp='{"makerCommission":8,"takerCommission":10,"buyerCommission":0,"sellerCommission":0,"canTrade":true,"canWithdraw":true,"canDeposit":true,"updateTime":1559285962286,"accountType":"MARGIN","balances":[{"asset":"BTC","free":"0.12741559","locked":"0.00000000"},{"asset":"LTC","free":"0.00000000","locked":"0.00000000"},{"asset":"ETH","free":"0.51957706","locked":"0.00000000"},{"asset":"NEO","free":"0.00459000","locked":"0.00000000"},{"asset":"BNB","free":"0.00000025","locked":"0.00000000"},{"asset":"QTUM","free":"0.00000000","locked":"0.00000000"},{"asset":"EOS","free":"9.64818000","locked":"0.00000000"},{"asset":"SNT","free":"0.00000000","locked":"0.00000000"},{"asset":"BNT","free":"0.00000000","locked":"0.00000000"},{"asset":"GAS","free":"0.00057722","locked":"0.00000000"},{"asset":"BCC","free":"0.00000000","locked":"0.00000000"},{"asset":"USDT","free":"4662.01724025","locked":"0.00000000"},{"asset":"HSR","free":"0.00000000","locked":"0.00000000"},{"asset":"OAX","free":"0.00000000","locked":"0.00000000"},{"asset":"DNT","free":"0.00000000","locked":"0.00000000"},{"asset":"MCO","free":"0.00000000","locked":"0.00000000"},{"asset":"ICN","free":"0.00000000","locked":"0.00000000"},{"asset":"ZRX","free":"0.00000000","locked":"0.00000000"},{"asset":"OMG","free":"0.00000000","locked":"0.00000000"},{"asset":"WTC","free":"0.00000000","locked":"0.00000000"},{"asset":"YOYO","free":"0.00000000","locked":"0.00000000"},{"asset":"LRC","free":"0.00000000","locked":"0.00000000"},{"asset":"TRX","free":"0.00000000","locked":"0.00000000"},{"asset":"SNGLS","free":"0.00000000","locked":"0.00000000"},{"asset":"STRAT","free":"0.00000000","locked":"0.00000000"},{"asset":"BQX","free":"0.00000000","locked":"0.00000000"},{"asset":"FUN","free":"0.00000000","locked":"0.00000000"},{"asset":"KNC","free":"0.00000000","locked":"0.00000000"},{"asset":"CDT","free":"0.00000000","locked":"0.00000000"},{"asset":"XVG","free":"0.00000000","locked":"0.00000000"},{"asset":"IOTA","free":"0.00000000","locked":"0.00000000"},{"asset":"SNM","free":"0.00000000","locked":"0.00000000"},{"asset":"LINK","free":"0.00000000","locked":"0.00000000"},{"asset":"CVC","free":"0.00000000","locked":"0.00000000"},{"asset":"TNT","free":"0.00000000","locked":"0.00000000"},{"asset":"REP","free":"0.00000000","locked":"0.00000000"},{"asset":"MDA","free":"0.00000000","locked":"0.00000000"},{"asset":"MTL","free":"0.00000000","locked":"0.00000000"},{"asset":"SALT","free":"0.00000000","locked":"0.00000000"},{"asset":"NULS","free":"0.00000000","locked":"0.00000000"},{"asset":"SUB","free":"0.00000000","locked":"0.00000000"},{"asset":"MTH","free":"0.00000000","locked":"0.00000000"},{"asset":"ADX","free":"0.00000000","locked":"0.00000000"},{"asset":"ETC","free":"0.00000000","locked":"0.00000000"},{"asset":"ENG","free":"0.00000000","locked":"0.00000000"},{"asset":"ZEC","free":"0.00000000","locked":"0.00000000"},{"asset":"AST","free":"0.00000000","locked":"0.00000000"},{"asset":"GNT","free":"0.00000000","locked":"0.00000000"},{"asset":"DGD","free":"0.00000000","locked":"0.00000000"},{"asset":"BAT","free":"0.00000000","locked":"0.00000000"},{"asset":"DASH","free":"0.00000000","locked":"0.00000000"},{"asset":"POWR","free":"0.00000000","locked":"0.00000000"},{"asset":"BTG","free":"0.00000000","locked":"0.00000000"},{"asset":"REQ","free":"0.00000000","locked":"0.00000000"},{"asset":"XMR","free":"0.00000000","locked":"0.00000000"},{"asset":"EVX","free":"0.00000000","locked":"0.00000000"},{"asset":"VIB","free":"0.00000000","locked":"0.00000000"},{"asset":"ENJ","free":"0.00000000","locked":"0.00000000"},{"asset":"VEN","free":"0.00000000","locked":"0.00000000"},{"asset":"ARK","free":"0.00000000","locked":"0.00000000"},{"asset":"XRP","free":"45.95850000","locked":"0.00000000"},{"asset":"MOD","free":"0.00000000","locked":"0.00000000"},{"asset":"STORJ","free":"0.00000000","locked":"0.00000000"},{"asset":"KMD","free":"0.00000000","locked":"0.00000000"},{"asset":"RCN","free":"0.00000000","locked":"0.00000000"},{"asset":"EDO","free":"0.00000000","locked":"0.00000000"},{"asset":"DATA","free":"0.00000000","locked":"0.00000000"},{"asset":"DLT","free":"0.00000000","locked":"0.00000000"},{"asset":"MANA","free":"0.00000000","locked":"0.00000000"},{"asset":"PPT","free":"0.00000000","locked":"0.00000000"},{"asset":"RDN","free":"0.00000000","locked":"0.00000000"},{"asset":"GXS","free":"0.00000000","locked":"0.00000000"},{"asset":"AMB","free":"0.00000000","locked":"0.00000000"},{"asset":"ARN","free":"0.00000000","locked":"0.00000000"},{"asset":"BCPT","free":"0.00000000","locked":"0.00000000"},{"asset":"CND","free":"0.00000000","locked":"0.00000000"},{"asset":"GVT","free":"0.00000000","locked":"0.00000000"},{"asset":"POE","free":"0.00000000","locked":"0.00000000"},{"asset":"BTS","free":"0.00000000","locked":"0.00000000"},{"asset":"FUEL","free":"0.00000000","locked":"0.00000000"},{"asset":"XZC","free":"0.00000000","locked":"0.00000000"},{"asset":"QSP","free":"0.00000000","locked":"0.00000000"},{"asset":"LSK","free":"0.00000000","locked":"0.00000000"},{"asset":"BCD","free":"0.00000000","locked":"0.00000000"},{"asset":"TNB","free":"0.00000000","locked":"0.00000000"},{"asset":"ADA","free":"0.00000000","locked":"0.00000000"},{"asset":"LEND","free":"0.00000000","locked":"0.00000000"},{"asset":"XLM","free":"0.00000000","locked":"0.00000000"},{"asset":"CMT","free":"0.00000000","locked":"0.00000000"},{"asset":"WAVES","free":"0.00000000","locked":"0.00000000"},{"asset":"WABI","free":"0.00000000","locked":"0.00000000"},{"asset":"GTO","free":"0.00000000","locked":"0.00000000"},{"asset":"ICX","free":"0.00000000","locked":"0.00000000"},{"asset":"OST","free":"0.00000000","locked":"0.00000000"},{"asset":"ELF","free":"0.00000000","locked":"0.00000000"},{"asset":"AION","free":"0.00000000","locked":"0.00000000"},{"asset":"WINGS","free":"0.00000000","locked":"0.00000000"},{"asset":"BRD","free":"0.00000000","locked":"0.00000000"},{"asset":"NEBL","free":"0.00000000","locked":"0.00000000"},{"asset":"NAV","free":"0.00000000","locked":"0.00000000"},{"asset":"VIBE","free":"0.00000000","locked":"0.00000000"},{"asset":"LUN","free":"0.00000000","locked":"0.00000000"},{"asset":"TRIG","free":"0.00000000","locked":"0.00000000"},{"asset":"APPC","free":"0.00000000","locked":"0.00000000"},{"asset":"CHAT","free":"0.00000000","locked":"0.00000000"},{"asset":"RLC","free":"0.00000000","locked":"0.00000000"},{"asset":"INS","free":"0.00000000","locked":"0.00000000"},{"asset":"PIVX","free":"0.00000000","locked":"0.00000000"},{"asset":"IOST","free":"0.00000000","locked":"0.00000000"},{"asset":"STEEM","free":"0.00000000","locked":"0.00000000"},{"asset":"NANO","free":"0.00000000","locked":"0.00000000"},{"asset":"AE","free":"0.00000000","locked":"0.00000000"},{"asset":"VIA","free":"0.00000000","locked":"0.00000000"},{"asset":"BLZ","free":"0.00000000","locked":"0.00000000"},{"asset":"SYS","free":"0.00000000","locked":"0.00000000"},{"asset":"RPX","free":"0.00000000","locked":"0.00000000"},{"asset":"NCASH","free":"0.00000000","locked":"0.00000000"},{"asset":"POA","free":"0.00000000","locked":"0.00000000"},{"asset":"ONT","free":"0.00000000","locked":"0.00000000"},{"asset":"ZIL","free":"0.00000000","locked":"0.00000000"},{"asset":"STORM","free":"0.00000000","locked":"0.00000000"},{"asset":"XEM","free":"0.00000000","locked":"0.00000000"},{"asset":"WAN","free":"0.00000000","locked":"0.00000000"},{"asset":"WPR","free":"0.00000000","locked":"0.00000000"},{"asset":"QLC","free":"0.00000000","locked":"0.00000000"},{"asset":"GRS","free":"0.00000000","locked":"0.00000000"},{"asset":"CLOAK","free":"0.00000000","locked":"0.00000000"},{"asset":"LOOM","free":"0.00000000","locked":"0.00000000"},{"asset":"BCN","free":"0.00000000","locked":"0.00000000"},{"asset":"TUSD","free":"0.00000000","locked":"0.00000000"},{"asset":"ZEN","free":"0.00000000","locked":"0.00000000"},{"asset":"SKY","free":"0.00000000","locked":"0.00000000"},{"asset":"THETA","free":"0.00000000","locked":"0.00000000"},{"asset":"IOTX","free":"0.00000000","locked":"0.00000000"},{"asset":"QKC","free":"0.00000000","locked":"0.00000000"},{"asset":"AGI","free":"0.00000000","locked":"0.00000000"},{"asset":"NXS","free":"0.00000000","locked":"0.00000000"},{"asset":"SC","free":"0.00000000","locked":"0.00000000"},{"asset":"NPXS","free":"0.00000000","locked":"0.00000000"},{"asset":"KEY","free":"0.00000000","locked":"0.00000000"},{"asset":"NAS","free":"0.00000000","locked":"0.00000000"},{"asset":"MFT","free":"0.00000000","locked":"0.00000000"},{"asset":"DENT","free":"0.00000000","locked":"0.00000000"},{"asset":"ARDR","free":"0.00000000","locked":"0.00000000"},{"asset":"HOT","free":"0.00000000","locked":"0.00000000"},{"asset":"VET","free":"0.00000000","locked":"0.00000000"},{"asset":"DOCK","free":"0.00000000","locked":"0.00000000"},{"asset":"POLY","free":"0.00000000","locked":"0.00000000"},{"asset":"ONG","free":"0.00000000","locked":"0.00000000"},{"asset":"PHX","free":"0.00000000","locked":"0.00000000"},{"asset":"HC","free":"0.00000000","locked":"0.00000000"},{"asset":"GO","free":"0.00000000","locked":"0.00000000"},{"asset":"PAX","free":"0.00000000","locked":"0.00000000"},{"asset":"RVN","free":"0.00000000","locked":"0.00000000"},{"asset":"DCR","free":"0.00000000","locked":"0.00000000"},{"asset":"USDC","free":"0.00000000","locked":"0.00000000"},{"asset":"MITH","free":"0.00000000","locked":"0.00000000"},{"asset":"BCHABC","free":"0.09803500","locked":"0.00000000"},{"asset":"BCHSV","free":"0.00000000","locked":"0.00000000"},{"asset":"REN","free":"0.00000000","locked":"0.00000000"},{"asset":"BTT","free":"0.00000000","locked":"0.00000000"},{"asset":"USDS","free":"0.00000000","locked":"0.00000000"},{"asset":"FET","free":"0.00000000","locked":"0.00000000"},{"asset":"TFUEL","free":"0.00000000","locked":"0.00000000"},{"asset":"CELR","free":"0.00000000","locked":"0.00000000"},{"asset":"MATIC","free":"0.00000000","locked":"0.00000000"},{"asset":"ATOM","free":"0.00000000","locked":"0.00000000"},{"asset":"PHB","free":"0.00000000","locked":"0.00000000"},{"asset":"ONE","free":"0.00000000","locked":"0.00000000"}]}';
        
        $temp=json_decode($temp,true);
        
        return $temp;
    }
    

    /**
     *账户成交历史 (USER_DATA)
    GET /api/v3/myTrades  (HMAC SHA256)
     * */
    static public function getMyTrades(array $data=[]){
        'GET';
        return '/api/v3/myTrades';
        
        
    }
    
    /**
     *充值历史 (USER_DATA)
    GET /wapi/v3/depositHistory.html (HMAC SHA256)
     * */
    static public function getDepositHistory(array $data=[]){
        'GET';
        return '/wapi/v3/depositHistory.html';
        
        
    }
    
    /**
     *提现历史 (USER_DATA)
    GET /wapi/v3/withdrawHistory.html (HMAC SHA256)
     * */
    static public function getWithdrawHistory(array $data=[]){
        'GET';
        return '/wapi/v3/withdrawHistory.html';
        
        
    }
    
    /**
     *获取充值地址(USER_DATA)
    GET  /wapi/v3/depositAddress.html (HMAC SHA256)
     * */
    static public function getDepositAddress(array $data=[]){
        'GET';
        return '/wapi/v3/depositAddress.html';
        
        
    }
    
    
    /**
     *账户状态 (USER_DATA)
    GET /wapi/v3/accountStatus.html
     * */
    static public function getAccountStatus(array $data=[]){
        $this->signature=false;
        'GET';
        return '/wapi/v3/accountStatus.html';
        
        
    }
    
    /**
     *小额资产转换历史 (USER_DATA)
    GET /wapi/v3/userAssetDribbletLog.html   (HMAC SHA256)
     * */
    static public function getAssetDribbletLog(array $data=[]){
        'GET';
        return '/wapi/v3/userAssetDribbletLog.html';
        
        
    }
    
    /**
     *交易手续费率查询 (USER_DATA)
    GET  /wapi/v3/tradeFee.html (HMAC SHA256)
     * */
    static public function getTradeFee(array $data=[]){
        'GET';
        return '/wapi/v3/tradeFee.html';
        
        
    }
    
    /**
     *上架资产详情 (USER_DATA)
    GET  /wapi/v3/assetDetail.html (HMAC SHA256)
     * */
    static public function getAssetDetail(array $data=[]){
        'GET';
        return '/wapi/v3/assetDetail.html';
        
        
    }
}