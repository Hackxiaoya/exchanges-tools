<?php

use Illuminate\Database\Seeder;

class BinanceApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement("INSERT INTO `apis` (`id`, `platform`, `type`, `method`, `url`, `data`, `created_at`, `updated_at`) VALUES 
        (NULL, 'binance', 'spot', 'get', '/api/v1/depth', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v1/trades', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v1/historicalTrades', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v1/aggTrades', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v1/klines', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v3/avgPrice', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v1/ticker/24hr', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v3/ticker/price', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v3/ticker/bookTicker', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v3/order', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v3/openOrders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v3/allOrders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v3/account', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'get', '/api/v3/myTrades', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'post', '/api/v3/order', '{\"symbol\":\"BTCUSDT\",\"orderId\":446823703,\"clientOrderId\":\"0OCXcFJPewPtS6l3rxrHcY\",\"transactTime\":1561020517268}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        (NULL, 'binance', 'spot', 'delete', '/api/v3/order', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
        ");
    }
}
