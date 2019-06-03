<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Binance\Api;


class Trade  extends Base
{
    /**
     * 下单 (TRADE)
    POST /api/v3/order  (HMAC SHA256)
    
    Name	Type	Mandatory	Description
    symbol	STRING	YES	
    side	ENUM	YES	
    type	ENUM	YES	
    timeInForce	ENUM	NO	
    quantity	DECIMAL	YES	
    price	DECIMAL	NO	
    newClientOrderId	STRING	NO	用户自定义的orderid，如空缺系统会自动赋值
    stopPrice	DECIMAL	NO	仅 STOP_LOSS, STOP_LOSS_LIMIT, TAKE_PROFIT, TAKE_PROFIT_LIMIT 需要此参数
    icebergQty	DECIMAL	NO	仅有限价单(包括条件限价单与限价做事单)可以使用该参数，含义为创建冰山订单并指定冰山订单的尺寸
    newOrderRespType	ENUM	NO	指定响应类型 ACK, RESULT, or FULL; MARKET 与 LIMIT 订单默认为FULL, 其他默认为ACK.
    recvWindow	LONG	NO	
    timestamp	LONG	YES	
    
    
    根据 order type的不同，某些参数强制要求，具体如下:
    Type	强制要求的参数
    LIMIT	timeInForce, quantity, price
    MARKET	quantity
    STOP_LOSS	quantity, stopPrice
    STOP_LOSS_LIMIT	timeInForce, quantity, price, stopPrice
    TAKE_PROFIT	quantity, stopPrice
    TAKE_PROFIT_LIMIT	timeInForce, quantity, price, stopPrice
    LIMIT_MAKER	quantity, price
    
     * */
    static public function postOrder(array $data){
        $temp='{
	"symbol": "BTCUSDT",
	"orderId": 413506601,
	"clientOrderId": "OBlK5RMWGHfbTGbNAsdABa",
	"transactTime": 1559530911762,
	"price": "2000.00000000",
	"origQty": "0.01000000",
	"executedQty": "0.00000000",
	"cummulativeQuoteQty": "0.00000000",
	"status": "NEW",
	"timeInForce": "GTC",
	"type": "LIMIT",
	"side": "BUY",
	"fills": []
}';
        $temp=json_decode($temp,true);
        
        if(isset($data['symbol'])) $temp['symbol']=$data['symbol'];
        if(isset($data['side'])) $temp['side']=$data['side'];
        if(isset($data['type'])) $temp['type']=$data['type'];
        if(isset($data['quantity'])) $temp['quantity']=$data['quantity'];
        if(isset($data['price'])) $temp['price']=$data['price'];
        if(isset($data['timeInForce'])) $temp['timeInForce']=$data['timeInForce'];
        $temp=self::randStatus($temp);
        
        return $temp;
        
    }
    
    /**
     * 测试下单接口 (TRADE)
    POST /api/v3/order/test (HMAC SHA256)
     * */
    static public function postOrderTest(array $data){
        'POST';
        '/api/v3/order/test';
        $data;
        
    }
    
    /**
     *撤销订单 (TRADE)
    DELETE /api/v3/order  (HMAC SHA256)
    
    symbol	STRING	YES	
    orderId	LONG	NO	
    origClientOrderId	STRING	NO	
    newClientOrderId	STRING	NO	用户自定义的本次撤销操作的ID(注意不是被撤销的订单的自定义ID)。如无指定会自动赋值。
    recvWindow	LONG	NO	
    timestamp	LONG	YES	
     * */
    static public function deleteOrder(array $data){
        $temp='{
	"symbol": "BTCUSDT",
	"origClientOrderId": "OBlK5RMWGHfbTGbNAsdABa",
	"orderId": 413506601,
	"clientOrderId": "sT68Zb4uuvYJiNXMMiyJ9L",
	"price": "2000.00000000",
	"origQty": "0.01000000",
	"executedQty": "0.00000000",
	"cummulativeQuoteQty": "0.00000000",
	"status": "CANCELED",
	"timeInForce": "GTC",
	"type": "LIMIT",
	"side": "BUY"
}';
        
        $temp=json_decode($temp,true);
        
        if(isset($data['symbol'])) $temp['symbol']=$data['symbol'];
        if(isset($data['orderId'])) $temp['orderId']=$data['orderId'];
        if(isset($data['origClientOrderId'])) $temp['origClientOrderId']=$data['origClientOrderId'];
        
        //$temp=self::randStatus($temp);
        
        return $temp;
    }
}