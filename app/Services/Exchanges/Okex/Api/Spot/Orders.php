<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Spot;



class Orders  extends Base
{
    /**
    Parameters	Parameters Types	Required	Description
    client_oid	string	No	the order ID customized by yourself , The client_oid type should be comprised of alphabets + numbers or only alphabets within 1 – 32 characters， both uppercase and lowercase letters are supported
    type	string	No	limit / market(default: limit)
    side	string	Yes	buy or sell
    instrument_id	string	Yes	trading pair
    margin_trading	byte	Yes	order type (The request value is 1)
    order_type	string	No	Fill in number for parameter，0: Normal limit order (Unfilled and 0 represent normal limit order) 1: Post only 2: Fill Or Kill 3: Immediatel Or Cancel
    *
    Parameters	Parameters Types	Required	Description
    price	string	Yes	price
    size	string	Yes	quantity bought or sold
    *
    Market Order Parameters
    Parameters	Parameters Types	Required	Description
    size	string	Yes	quantity sold. (for orders sold at market price only)
    notional	string	Yes	amount bought. (for orders bought at market price only)
    */
    static public function post(array $data=[]){
        $temp='{
	"client_oid": "",
	"error_code": "",
	"error_message": "",
	"order_id": "2914177357256704",
	"result": true
}';
        $temp=json_decode($temp,true);
        
        return $temp;
    }
    
    static public function postBatch(){
        
    }
    
    /**
     * Cancelling an unfilled order.
     * 
        Parameters	Parameters Types	Required	Description
        instrument_id	string	Yes	By providing this parameter, the corresponding order of a designated trading pair will be cancelled. If not providing this parameter, it will be back to error code.
        client_oid	string	Yes	the order ID created by yourself, The client_oid type should be comprised of alphabets + numbers or only alphabets within 1 – 32 characters， both uppercase and lowercase letters are supported
        order_id	string	Yes	order ID
     * */
    static public function postCancel(array $data=[]){
        $temp='{
	"client_oid": "",
	"error_code": "",
	"error_message": "",
	"order_id": "2914240779588609",
	"result": true
}';
        $temp=json_decode($temp,true);
        
        if(isset($data['order_id'])) $temp['order_id']=$data['order_id'];
        if(isset($data['client_oid'])) $temp['client_oid']=$data['client_oid'];
        
        return $temp;
    }
    
    static public function postCancelBatch(array $data=[]){
        'POST';
        return '';
        
        
    }
    
    static public function getAll(array $data=[]){
        'GET';
        return '';
        
        
    }
    
    static public function getPending(array $data=[]){
        'GET';
        return '';
        
        
    }
    
    /**
     * Get order details by order ID.
     * 
        Parameters	Parameters Types	Description
        instrument_id	string	[required]trading pair
        order_id	string	[ required] order ID
        client_oid	string	[ required ] The client_oid type should be comprised of alphabets + numbers or only alphabets within 1 – 32 characters， both uppercase and lowercase letters are supported
     * */
    static public function get(array $data=[]){
        $temp='{
	"client_oid": "",
	"created_at": "2019-05-30T08:02:06.000Z",
	"filled_notional": "0",
	"filled_size": "0",
	"funds": "",
	"instrument_id": "BTC-USDT",
	"notional": "",
	"order_id": "2914210685519872",
	"order_type": "0",
	"price": "100",
	"price_avg": "0",
	"product_id": "BTC-USDT",
	"side": "buy",
	"size": "0.001",
	"state": "0",
	"status": "open",
	"timestamp": "2019-05-30T08:02:06.000Z",
	"type": "limit"
}';
        $temp=json_decode($temp,true);
        
        if(isset($data['client_oid'])) $temp['client_id']=$data['client_oid'];
        if(isset($data['order_id'])) $temp['order_id']=$data['order_id'];
        if(isset($data['instrument_id'])) $temp['instrument_id']=$data['instrument_id'];
        
        if(isset($data['side'])) $temp['side']=$data['side'];
        if(isset($data['price'])) $temp['price']=$data['price'];
        if(isset($data['size'])) $temp['size']=$data['size'];
        
        $temp=self::randStatus($temp);
        
        return $temp;
    }
}