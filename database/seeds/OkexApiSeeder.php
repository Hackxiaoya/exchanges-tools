<?php

use Illuminate\Database\Seeder;

class OkexApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //spot
        \DB::statement("INSERT INTO `apis` (`id`, `platform`, `type`, `method`, `url`, `data`, `created_at`, `updated_at`) VALUES 
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/accounts', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/accounts/<currency>', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/accounts/<currency>/ledger', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/orders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/orders_pending', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/orders/<order_id>', '{\"client_oid\":\"\",\"created_at\":\"2019-05-30T08:02:06.000Z\",\"filled_notional\":\"0\",\"filled_size\":\"0\",\"funds\":\"\",\"instrument_id\":\"BTC-USDT\",\"notional\":\"\",\"order_id\":\"2914210685519872\",\"order_type\":\"0\",\"price\":\"100\",\"price_avg\":\"0\",\"product_id\":\"BTC-USDT\",\"side\":\"buy\",\"size\":\"0.001\",\"state\":\"0\",\"status\":\"open\",\"timestamp\":\"2019-05-30T08:02:06.000Z\",\"type\":\"limit\"}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/fills', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/<instrument_id>/book', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/ticker', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/<instrument-id>/ticker', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/<instrument_id>/trades', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/<instrument_id>/candles', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'post', '/api/spot/v3/orders', '{\"client_oid\":\"\",\"error_code\":\"\",\"error_message\":\"\",\"order_id\":\"2914177357256704\",\"result\":\"true\"}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'post', '/api/spot/v3/batch_orders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'post', '/api/spot/v3/cancel_orders/<order_id>', '{\"client_oid\":\"\",\"error_code\":\"\",\"error_message\":\"\",\"order_id\":\"2914240779588609\",\"result\":\"true\"}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'post', '/api/spot/v3/cancel_batch_orders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
");
        
        //future
        //\DB::statement("");
    }
}
