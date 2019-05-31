<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace App\Services\Exchanges\Okex\Api\Futures;



class Position
{
    /**
     * Get the information of all holding positions in futures trading.Due to high energy consumption, you are advised to capture data with the "Futures Account of a Currency" API instead.
     * 
     * */
    static public function getAll(array $data=[]){
        $temp='{
	"result": true,
	"holding": [
		[{
			"long_qty": "0",
			"long_avail_qty": "0",
			"long_margin": "0",
			"long_liqui_price": "0",
			"long_pnl_ratio": "0",
			"long_avg_cost": "0",
			"long_settlement_price": "0",
			"realised_pnl": "0",
			"short_qty": "0",
			"short_avail_qty": "0",
			"short_margin": "0",
			"short_liqui_price": "0",
			"short_pnl_ratio": "0",
			"short_avg_cost": "0",
			"short_settlement_price": "0",
			"instrument_id": "BTC-USD-190531",
			"long_leverage": "10",
			"short_leverage": "0",
			"created_at": "2019-05-31T02:53:54.000Z",
			"updated_at": "2019-05-31T02:54:07.000Z",
			"margin_mode": "fixed",
			"short_margin_ratio": "10000.0",
			"short_maint_margin_ratio": "",
			"short_pnl": "0.0",
			"short_unrealised_pnl": "0.0",
			"long_margin_ratio": "10000.0",
			"long_maint_margin_ratio": "",
			"long_pnl": "0.0",
			"long_unrealised_pnl": "0.0"
		}, {
			"long_qty": "0",
			"long_avail_qty": "0",
			"long_margin": "0",
			"long_liqui_price": "0",
			"long_pnl_ratio": "3.53394387",
			"long_avg_cost": "5378.91",
			"long_settlement_price": "5378.91",
			"realised_pnl": "0",
			"short_qty": "0",
			"short_avail_qty": "0",
			"short_margin": "0",
			"short_liqui_price": "0",
			"short_pnl_ratio": "-3.5339373",
			"short_avg_cost": "5378.9",
			"short_settlement_price": "5378.9",
			"instrument_id": "BTC-USD-190628",
			"long_leverage": "10",
			"short_leverage": "10",
			"created_at": "2019-03-15T09:46:35.000Z",
			"updated_at": "2019-05-31T03:44:52.000Z",
			"margin_mode": "fixed",
			"short_margin_ratio": "10000.0",
			"short_maint_margin_ratio": "",
			"short_pnl": "0.0",
			"short_unrealised_pnl": "0.0",
			"long_margin_ratio": "10000.0",
			"long_maint_margin_ratio": "",
			"long_pnl": "0.0",
			"long_unrealised_pnl": "0.0"
		}]
	]
}';
        $temp=json_decode($temp,true);
        
        foreach ($temp['holding'] as $h_k=>$h_v){
            foreach ($h_v as $k=>$v){
                
                if(isset($data['instrument_id'])) $temp[$h_k][$k]['instrument_id']=$data['instrument_id'];
                
            }
        }
        
        return $temp;
    }
    
    /**
     * Get the information of holding positions of a contract.
     * 
        Parameters	Parameters Types	Required	Description
        instrument_id	String	Yes	Contract ID, e.g.“BTC-USD-180213”
     * */
    static public function get(array $data=[]){
        $temp='{
	"result": true,
	"holding": [{
		"long_qty": "0",
		"long_avail_qty": "0",
		"long_margin": "0",
		"long_liqui_price": "0",
		"long_pnl_ratio": "3.52802707",
		"long_avg_cost": "5378.91",
		"long_settlement_price": "5378.91",
		"realised_pnl": "0",
		"short_qty": "0",
		"short_avail_qty": "0",
		"short_margin": "0",
		"short_liqui_price": "0",
		"short_pnl_ratio": "-3.52802051",
		"short_avg_cost": "5378.9",
		"short_settlement_price": "5378.9",
		"instrument_id": "BTC-USD-190628",
		"long_leverage": "10",
		"short_leverage": "10",
		"created_at": "2019-03-15T09:46:35.000Z",
		"updated_at": "2019-05-31T03:44:52.000Z",
		"margin_mode": "fixed",
		"short_margin_ratio": "10000.0",
		"short_maint_margin_ratio": "",
		"short_pnl": "0.0",
		"short_unrealised_pnl": "0.0",
		"long_margin_ratio": "10000.0",
		"long_maint_margin_ratio": "",
		"long_pnl": "0.0",
		"long_unrealised_pnl": "0.0"
	}],
	"margin_mode": "fixed"
}';
        $temp=json_decode($temp,true);
        
        return $temp;
    }
}