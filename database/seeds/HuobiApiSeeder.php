<?php

use Illuminate\Database\Seeder;

class HuobiApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement("INSERT INTO `apis` (`id`, `platform`, `type`, `method`, `url`, `data`, `created_at`, `updated_at`) VALUES 
(NULL, 'huobi', 'spot', 'get', '/market/history/kline', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/market/detail/merged', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/market/tickers', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/market/depth', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/market/trade', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/market/history/trade', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/market/detail', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/common/symbols', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/common/currencys', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/common/timestamp', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/account/accounts', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/order/orders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/order/history', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/order/matchresults', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/order/openOrders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/query/deposit-withdraw', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/margin/loan-orders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/margin/accounts/balance', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/etf/swap/config', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/etf/list', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/quotation/market/history/kline', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/subuser/aggregate-balance', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/account/accounts/{account-id}/balance', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/order/orders/{order-id}', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/order/orders/{order-id}/matchresults', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'get', '/v1/account/accounts/{sub-uid}', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/order/orders/place', '{\"status\":\"ok\",\"data\":\"35804833872\"}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/order/orders/batchcancel', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/order/orders/batchCancelOpenOrders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/dw/withdraw/api/create', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/dw/transfer-in/margin', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/dw/transfer-out/margin', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/margin/orders', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/etf/swap/in', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/etf/swap/out', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/subuser/transfer', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/order/orders/{order-id}/submitcancel', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 'huobi', 'spot', 'post', '/v1/margin/orders/{order-id}/repay', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
        ");
    }
}
