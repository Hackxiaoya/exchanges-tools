<?php

use Illuminate\Database\Seeder;

class BitmexApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement("INSERT INTO `apis` (`id`, `platform`, `type`, `method`, `url`, `data`, `created_at`, `updated_up`) VALUES 
(NULL, 'bitmex', 'future', 'get', '/api/v1/announcement', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/announcement/urgent', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/apiKey', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/chat', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/chat/channels', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/chat/connected', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/execution', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/execution/tradeHistory', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/funding', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/globalNotification', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/instrument', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/instrument/active', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/instrument/activeAndIndices', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/instrument/activeIntervals', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/instrument/compositeIndex', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/instrument/indices', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/insurance', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/leaderboard', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/leaderboard/name', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/liquidation', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/order', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/orderBook/L2', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/position', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/quote', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/quote/bucketed', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/schema', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/schema/websocketHelp', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/settlement', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/stats', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/stats/history', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/stats/historyUSD', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/trade', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/api/v1/trade/bucketed', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/apiKey', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/apiKey/disable', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/apiKey/enable', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/chat', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/order', '{\"side\":\"Buy\",\"text\":\"Submitted via API.\",\"avgPx\":null,\"price\":100,\"cumQty\":0,\"stopPx\":null,\"symbol\":\"XBTUSD\",\"account\":155761,\"clOrdID\":\"\",\"ordType\":\"Limit\",\"orderID\":\"069bc5ef-1040-7952-948f-e26ad8673825\",\"currency\":\"USD\",\"execInst\":\"\",\"orderQty\":100,\"leavesQty\":1,\"ordStatus\":\"New\",\"timestamp\":\"2019-05-28T08:26:26.819Z\",\"triggered\":\"\",\"displayQty\":null,\"clOrdLinkID\":\"\",\"timeInForce\":\"GoodTillCancel\",\"ordRejReason\":\"\",\"pegPriceType\":\"\",\"simpleCumQty\":null,\"transactTime\":\"2019-05-28T08:26:26.819Z\",\"exDestination\":\"XBME\",\"settlCurrency\":\"XBt\",\"pegOffsetValue\":null,\"simpleOrderQty\":null,\"contingencyType\":\"\",\"simpleLeavesQty\":null,\"workingIndicator\":true,\"multiLegReportingType\":\"SingleSecurity\"}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/order/bulk', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/order/cancelAllAfter', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/order/closePosition', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/position/isolate', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/position/leverage', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/position/riskLimit', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/api/v1/position/transferMargin', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'delete', '/api/v1/apiKey', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'delete', '/api/v1/order', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'delete', '/api/v1/order/all', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'put', '/api/v1/order', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'put', '/api/v1/order/bulk', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);");
    }
}
