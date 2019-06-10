<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Position   extends Base
{
    /**
     * /api/v1/position
     * */
    static public function get(array $data=[]){
        $temp='[{
	"account": 155761,
	"symbol": "XBTM19",
	"currency": "XBt",
	"underlying": "XBT",
	"quoteCurrency": "USD",
	"commission": 0.00075,
	"initMarginReq": 0.01,
	"maintMarginReq": 0.005,
	"riskLimit": 5000000000,
	"leverage": 100,
	"crossMargin": true,
	"deleveragePercentile": 1,
	"rebalancedPnl": -9,
	"prevRealisedPnl": 0,
	"prevUnrealisedPnl": 0,
	"prevClosePrice": 8913.86,
	"openingTimestamp": "2019-05-28T06:00:00.000Z",
	"openingQty": 1,
	"openingCost": -13048,
	"openingComm": 0,
	"openOrderBuyQty": 0,
	"openOrderBuyCost": 0,
	"openOrderBuyPremium": 0,
	"openOrderSellQty": 0,
	"openOrderSellCost": 0,
	"openOrderSellPremium": 0,
	"execBuyQty": 0,
	"execBuyCost": 0,
	"execSellQty": 0,
	"execSellCost": 0,
	"execQty": 0,
	"execCost": 0,
	"execComm": 0,
	"currentTimestamp": "2019-05-28T06:07:46.028Z",
	"currentQty": 1,
	"currentCost": -13048,
	"currentComm": 0,
	"realisedCost": 0,
	"unrealisedCost": -13048,
	"grossOpenCost": 0,
	"grossOpenPremium": 0,
	"grossExecCost": 0,
	"isOpen": true,
	"markPrice": 8882.76,
	"markValue": -11258,
	"riskValue": 11258,
	"homeNotional": 0.00011258,
	"foreignNotional": -1,
	"posState": "",
	"posCost": -13048,
	"posCost2": -13048,
	"posCross": 0,
	"posInit": 131,
	"posComm": 10,
	"posLoss": 0,
	"posMargin": 141,
	"posMaint": 76,
	"posAllowance": 0,
	"taxableMargin": 0,
	"initMargin": 0,
	"maintMargin": 1931,
	"sessionMargin": 0,
	"targetExcessMargin": 0,
	"varMargin": 0,
	"realisedGrossPnl": 0,
	"realisedTax": 0,
	"realisedPnl": 0,
	"unrealisedGrossPnl": 1790,
	"longBankrupt": 0,
	"shortBankrupt": 0,
	"taxBase": 1790,
	"indicativeTaxRate": 0,
	"indicativeTax": 0,
	"unrealisedTax": 0,
	"unrealisedPnl": 1790,
	"unrealisedPnlPcnt": 0.1372,
	"unrealisedRoePcnt": 13.7186,
	"simpleQty": null,
	"simpleCost": null,
	"simpleValue": null,
	"simplePnl": null,
	"simplePnlPcnt": null,
	"avgCostPrice": 7664,
	"avgEntryPrice": 7664,
	"breakEvenPrice": 7669.5,
	"marginCallPrice": 5.5,
	"liquidationPrice": 5.5,
	"bankruptPrice": 5.5,
	"timestamp": "2019-05-28T06:07:46.028Z",
	"lastPrice": 8882.76,
	"lastValue": -11258
}, {
	"account": 155761,
	"symbol": "XBTUSD",
	"currency": "XBt",
	"underlying": "XBT",
	"quoteCurrency": "USD",
	"commission": 0.00075,
	"initMarginReq": 0.01,
	"maintMarginReq": 0.005,
	"riskLimit": 20000000000,
	"leverage": 100,
	"crossMargin": true,
	"deleveragePercentile": 1,
	"rebalancedPnl": 42,
	"prevRealisedPnl": -625,
	"prevUnrealisedPnl": 0,
	"prevClosePrice": 8722,
	"openingTimestamp": "2019-05-28T06:00:00.000Z",
	"openingQty": -1,
	"openingCost": 12870,
	"openingComm": 88,
	"openOrderBuyQty": 0,
	"openOrderBuyCost": 0,
	"openOrderBuyPremium": 0,
	"openOrderSellQty": 0,
	"openOrderSellCost": 0,
	"openOrderSellPremium": 0,
	"execBuyQty": 0,
	"execBuyCost": 0,
	"execSellQty": 0,
	"execSellCost": 0,
	"execQty": 0,
	"execCost": 0,
	"execComm": 0,
	"currentTimestamp": "2019-05-28T06:07:46.028Z",
	"currentQty": -1,
	"currentCost": 12870,
	"currentComm": 88,
	"realisedCost": 0,
	"unrealisedCost": 12870,
	"grossOpenCost": 0,
	"grossOpenPremium": 0,
	"grossExecCost": 0,
	"isOpen": true,
	"markPrice": 8710.54,
	"markValue": 11480,
	"riskValue": 11480,
	"homeNotional": -0.0001148,
	"foreignNotional": 1,
	"posState": "",
	"posCost": 12870,
	"posCost2": 13086,
	"posCross": 1606,
	"posInit": 129,
	"posComm": 11,
	"posLoss": 216,
	"posMargin": 1530,
	"posMaint": 92,
	"posAllowance": 0,
	"taxableMargin": 0,
	"initMargin": 0,
	"maintMargin": 140,
	"sessionMargin": 0,
	"targetExcessMargin": 0,
	"varMargin": 0,
	"realisedGrossPnl": 0,
	"realisedTax": 0,
	"realisedPnl": -88,
	"unrealisedGrossPnl": -1390,
	"longBankrupt": 0,
	"shortBankrupt": 0,
	"taxBase": 0,
	"indicativeTaxRate": 0,
	"indicativeTax": 0,
	"unrealisedTax": 0,
	"unrealisedPnl": -1390,
	"unrealisedPnlPcnt": -0.108,
	"unrealisedRoePcnt": -10.8003,
	"simpleQty": null,
	"simpleCost": null,
	"simpleValue": null,
	"simplePnl": null,
	"simplePnlPcnt": null,
	"avgCostPrice": 7770,
	"avgEntryPrice": 7770,
	"breakEvenPrice": 7742,
	"marginCallPrice": 100000000,
	"liquidationPrice": 100000000,
	"bankruptPrice": 100000000,
	"timestamp": "2019-05-28T06:07:46.028Z",
	"lastPrice": 8710.54,
	"lastValue": 11480
}]';
        
        $temp=json_decode($temp,true);
        
        //如果需要单一查询获取第一个数据
        if(isset($data['filter'])){
            $filter=json_decode($data['filter'],true);
            foreach ($temp as $k=>$v){
                if(isset($filter['symbol'])) {
                    $temp[$k]['symbol']=$filter['symbol'];
                    return [$temp[$k]];
                }
            }
        }
        
        return $temp;
    }
    
    static public function postIsolate(array $data=[]){
        return '';
    }

    /**
     * 设置账户杠杆
     * /api/v1/position/leverage
     * $data = [
     *      symbol => symbol,
     *      leverage => 0
     * ] // 这只是全仓模式的配置示范,其他模式传其他数据
     * @param array $data
     * @return mixed
     * @throws \Lin\Bitmex\Exceptions\Exception
     */
    static public function postLeverage(array $data=[])
    {
        $temp='{
	"account": 155761,
	"symbol": "XBTUSD",
	"currency": "XBt",
	"underlying": "XBT",
	"quoteCurrency": "USD",
	"commission": 0.00075,
	"initMarginReq": 0.01,
	"maintMarginReq": 0.005,
	"riskLimit": 20000000000,
	"leverage": 100,
	"crossMargin": true,
	"deleveragePercentile": 1,
	"rebalancedPnl": 42,
	"prevRealisedPnl": -625,
	"prevUnrealisedPnl": 0,
	"prevClosePrice": 8722,
	"openingTimestamp": "2019-05-28T06:00:00.000Z",
	"openingQty": -1,
	"openingCost": 12870,
	"openingComm": 88,
	"openOrderBuyQty": 0,
	"openOrderBuyCost": 0,
	"openOrderBuyPremium": 0,
	"openOrderSellQty": 0,
	"openOrderSellCost": 0,
	"openOrderSellPremium": 0,
	"execBuyQty": 0,
	"execBuyCost": 0,
	"execSellQty": 0,
	"execSellCost": 0,
	"execQty": 0,
	"execCost": 0,
	"execComm": 0,
	"currentTimestamp": "2019-05-28T06:13:15.546Z",
	"currentQty": -1,
	"currentCost": 12870,
	"currentComm": 88,
	"realisedCost": 0,
	"unrealisedCost": 12870,
	"grossOpenCost": 0,
	"grossOpenPremium": 0,
	"grossExecCost": 0,
	"isOpen": true,
	"markPrice": 8722,
	"markValue": 11465,
	"riskValue": 11465,
	"homeNotional": -0.00011465,
	"foreignNotional": 1,
	"posState": "",
	"posCost": 12870,
	"posCost2": 13086,
	"posCross": 1621,
	"posInit": 129,
	"posComm": 12,
	"posLoss": 216,
	"posMargin": 1546,
	"posMaint": 93,
	"posAllowance": 0,
	"taxableMargin": 0,
	"initMargin": 0,
	"maintMargin": 141,
	"sessionMargin": 0,
	"targetExcessMargin": 0,
	"varMargin": 0,
	"realisedGrossPnl": 0,
	"realisedTax": 0,
	"realisedPnl": -88,
	"unrealisedGrossPnl": -1405,
	"longBankrupt": 0,
	"shortBankrupt": 0,
	"taxBase": 0,
	"indicativeTaxRate": 0,
	"indicativeTax": 0,
	"unrealisedTax": 0,
	"unrealisedPnl": -1405,
	"unrealisedPnlPcnt": -0.1092,
	"unrealisedRoePcnt": -10.9169,
	"simpleQty": null,
	"simpleCost": null,
	"simpleValue": null,
	"simplePnl": null,
	"simplePnlPcnt": null,
	"avgCostPrice": 7770,
	"avgEntryPrice": 7770,
	"breakEvenPrice": 7742,
	"marginCallPrice": 100000000,
	"liquidationPrice": 100000000,
	"bankruptPrice": 100000000,
	"timestamp": "2019-05-28T06:13:15.546Z",
	"lastPrice": 8722,
	"lastValue": 11465
}';
        $temp=json_decode($temp,true);
        
        if(isset($data['symbol'])) {
            $temp['symbol']=$data['symbol'];
        }
        
        return $temp;
    }
    
    static public function postRiskLimit(array $data=[]){
        
        return '';
        
        
    }
    
    static public function postTransferMargin(array $data=[]){
        
        return '';
        
        
    }
}