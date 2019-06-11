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
        \DB::statement("INSERT INTO `api` (`id`, `platform`, `type`, `method`, `url`, `data`, `created_at`, `updated_up`) VALUES 
(NULL, 'bitmex', 'future', 'get', '/announcement', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/announcement/urgent', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/apiKey', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/chat', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/chat/channels', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/chat/connected', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/execution', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/execution/tradeHistory', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/funding', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/globalNotification', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/instrument', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/instrument/active', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/instrument/activeAndIndices', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/instrument/activeIntervals', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/instrument/compositeIndex', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/instrument/indices', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/insurance', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/leaderboard', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/leaderboard/name', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/liquidation', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/order', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/orderBook/L2', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/position', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/quote', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/quote/bucketed', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/schema', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/schema/websocketHelp', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/settlement', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/stats', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/stats/history', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/stats/historyUSD', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/trade', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'get', '/trade/bucketed', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/apiKey', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/apiKey/disable', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/apiKey/enable', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/chat', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/order', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/order/bulk', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/order/cancelAllAfter', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/order/closePosition', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/position/isolate', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/position/leverage', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/position/riskLimit', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'post', '/position/transferMargin', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'delete', '/apiKey', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'delete', '/order', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'delete', '/order/all', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'put', '/order', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'bitmex', 'future', 'put', '/order/bulk', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);");
    }
}
