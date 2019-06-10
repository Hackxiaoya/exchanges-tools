<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Futures;


class Accounts extends Base
{
    /**
     * Futures Account of all Currency
     * */
    static public function getAll(array $data=[]){
        $temp='{
	"info": {
		"btc": {
			"auto_margin": "1",
			"contracts": [{
				"available_qty": "0.26827401",
				"fixed_balance": "0",
				"instrument_id": "BTC-USD-190628",
				"margin_for_unfilled": "0.1",
				"margin_frozen": "0",
				"realized_pnl": "0",
				"unrealized_pnl": "0"
			}],
			"equity": "0.36827401",
			"liqui_mode": "legacy",
			"margin_mode": "fixed",
			"total_avail_balance": "0.36827401"
		}
	}
}';
        $temp=json_decode($temp,true);
        
        return $temp;
    }
    
    static public function get(array $data=[]){
        $temp='{
	"total_avail_balance": "0.36827401",
	"contracts": [{
		"available_qty": "0.26827401",
		"fixed_balance": "0",
		"instrument_id": "BTC-USD-190628",
		"margin_for_unfilled": "0.1",
		"margin_frozen": "0",
		"realized_pnl": "0",
		"unrealized_pnl": "0"
	}],
	"equity": "0.36827401",
	"margin_mode": "fixed",
	"auto_margin": "1",
	"liqui_mode": "legacy"
}';
        $temp=json_decode($temp,true);
        
        return $temp;
    }
    
    static public function getLeverage(array $data=[]){
        'GET';
        return '';
        
        
        
        
    }
    
    static public function postLeverage(array $data=[]){
        'POST';
        return '';
        
        
    }
    
    static public function getLedger(array $data=[]){
        return [];
    }
    
    static public function getHolds(array $data=[]){
        'GET';
        return '';
        
        
        
        
    }
}