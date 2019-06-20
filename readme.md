### 前言
这个项目主要用于辅助量化交易进行模拟测试，目前只支持随机性的数据模拟，后期会加入流程性、策略性、行情数据模拟等等。

该项目由很多未完善的功能，欢迎大家与我们一起改进它。

### 支持的交易所API

[Bitmex](https://github.com/zhouaini528/bitmex-php) [More Tests](https://github.com/zhouaini528/bitmex-php/tree/master/tests)

[Okex](https://github.com/zhouaini528/okex-php) [More Tests](https://github.com/zhouaini528/okex-php/tree/master/tests)

[Huobi](https://github.com/zhouaini528/huobi-php) [More Tests](https://github.com/zhouaini528/huobi-php/tree/master/tests)

[Binance](https://github.com/zhouaini528/binance-php) [More Tests](https://github.com/zhouaini528/binance-php/tree/master/tests)

[Exchanges](https://github.com/zhouaini528/exchanges-php) [More Tests](https://github.com/zhouaini528/exchanges-php/tree/master/tests)是以上所有交易所集合成的SDK

### 安装方式
```
composer create-project dytf/exchanges-tools:dev-master


//进入项目目录，初始化项目以及数据迁移
php artisan migrate

php artisan db:seed
```

### 案例
```php
//定义虚拟测试接口地址
$host='http://localhost/bitmex/1';
//支持集成SDK
$exchanges=new Exchanges('bitmex',$key,$secret,$extra,$host);
//支持底层API
$bitmex=new Bitmex($key,$secret,$host);

```

```php
//币币交易
//定义虚拟测试接口地址
$host='http://localhost/okex/spot/1';
//支持集成SDK
$exchanges=new Exchanges('okex',$key,$secret,$passphrase,$host);
//支持底层API
$okex=new OkexSpot($key,$secret,$passphrase,$host);

//合约交易
//定义虚拟测试接口地址
$host='http://localhost/okex/future/1';
//支持集成SDK
$exchanges=new Exchanges('okex',$key,$secret,$passphrase,$host);
//支持底层API
$okex=new OkexFuture($key,$secret,$passphrase,$host);
```
