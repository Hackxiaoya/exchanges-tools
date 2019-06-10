<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Spot;


class Accounts  extends Base
{
    /**
     * return '/api/spot/v3/accounts';
     * */
    static public function getAll(array $data=[]){
        $temp='[{
	"frozen": "0",
	"hold": "0",
	"id": "8071024",
	"currency": "BTC",
	"balance": "0.51047081",
	"available": "0.51047081",
	"holds": "0"
}, {
	"frozen": "0",
	"hold": "0",
	"id": "8071024",
	"currency": "ETH",
	"balance": "1.494",
	"available": "1.494",
	"holds": "0"
}, {
	"frozen": "0",
	"hold": "0",
	"id": "8071024",
	"currency": "ETC",
	"balance": "1.69545",
	"available": "1.69545",
	"holds": "0"
}, {
	"frozen": "109.09076253",
	"hold": "109.09076253",
	"id": "8071024",
	"currency": "USDT",
	"balance": "1217.79714875",
	"available": "1108.70638621",
	"holds": "109.09076253"
}, {
	"frozen": "0",
	"hold": "0",
	"id": "8071024",
	"currency": "EOS",
	"balance": "0.0980758",
	"available": "0.0980758",
	"holds": "0"
}, {
	"frozen": "0",
	"hold": "0",
	"id": "8071024",
	"currency": "BCH",
	"balance": "0.83618485",
	"available": "0.83618485",
	"holds": "0"
}]';
        $temp=json_decode($temp,true);
        
        return $temp;
    }
    
    /**
     'currency'=>'BTC',   required
     * */
    static public function get(array $data=[]){
        $temp='{
	"frozen": "0",
	"hold": "0",
	"id": "8071024",
	"currency": "BTC",
	"balance": "0.51047081",
	"available": "0.51047081",
	"holds": "0"
}';
        
        $temp=json_decode($temp,true);
        
        if(isset($data['currency'])) $temp['currency']=$data['currency'];
        
        return $temp;
    }
    
    /**
     *  'currency'=>'BTC',   required
     *  'limit'=>2,             optional
     *  'form'                    optional
     *  'to'                        optional
     * */
    static public function getLedger(array $data=[]){
        $temp='[{
	"timestamp": "2019-05-29T02:34:24.000Z",
	"ledger_id": "5240613133",
	"created_at": "2019-05-29T02:34:24.000Z",
	"currency": "BTC",
	"amount": "0.0009985",
	"balance": "0.5104708118955",
	"type": "trade",
	"details": {
		"instrument_id": "BTC-USDT",
		"order_id": "2907259759368193",
		"product_id": "BTC-USDT"
	}
}, {
	"timestamp": "2019-05-29T02:27:55.000Z",
	"ledger_id": "5240497200",
	"created_at": "2019-05-29T02:27:55.000Z",
	"currency": "BTC",
	"amount": "0.0009985",
	"balance": "0.5094723118955",
	"type": "trade",
	"details": {
		"instrument_id": "BTC-USDT",
		"order_id": "2907234290838528",
		"product_id": "BTC-USDT"
	}
}, {
	"timestamp": "2019-05-27T07:44:12.000Z",
	"ledger_id": "5205231382",
	"created_at": "2019-05-27T07:44:12.000Z",
	"currency": "BTC",
	"amount": "0.001148464715",
	"balance": "0.5084738118955",
	"type": "trade",
	"details": {
		"instrument_id": "BTC-USDT",
		"order_id": "2897153354247168",
		"product_id": "BTC-USDT"
	}
}]';
        
        $temp=json_decode($temp,true);
        
        if(isset($data['currency'])) {
            foreach ($temp as $k=>$v){
                $temp[$k]['currency']=$data['currency'];
            }
        }
        
        return $temp;
    }
    
}