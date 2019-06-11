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
        \DB::statement("INSERT INTO `api` (`id`, `platform`, `type`, `method`, `url`, `data`, `created_at`, `updated_up`) VALUES 
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/accounts', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/accounts/<currency>', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/accounts/<currency>/ledger', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/orders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/orders_pending', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/orders/<order_id>', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/fills', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/<instrument_id>/book', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/ticker', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/<instrument-id>/ticker', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/<instrument_id>/trades', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'okex', 'spot', 'get', '/api/spot/v3/instruments/<instrument_id>/candles', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);");
        
        //future
        //\DB::statement("");
    }
}
