<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Exchanges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Schema::create('exchanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        }); */
        \DB::statement("CREATE TABLE `api` (
          `id` int(10) NOT NULL AUTO_INCREMENT,
          `platform` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '平台名称如：bitmex,okex',
          `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '平台类型如future,spot',
          `method` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '请求类型如get,post',
          `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '请求地址',
          `data` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '镜像数据josn保存',
          `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
          `updated_up` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`),
          KEY `platform` (`platform`,`type`,`method`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");
        
        \DB::statement("CREATE TABLE `api_data` (
          `id` int(10) NOT NULL AUTO_INCREMENT,
          `api_id` int(10) NOT NULL COMMENT '外键',
          `user_id` int(10) NOT NULL COMMENT '外键',
          `order_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '冗余自定义ID可以为空',
          `client_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '冗余自定义ID可以为空',
          `data` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '存储数据josn格式保存',
          `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
          `updated_up` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`),
          KEY `api_id` (`api_id`),
          KEY `user_id` (`user_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");
        
        \DB::statement("CREATE TABLE `log` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `api_id` int(11) NOT NULL,
          `user_id` int(11) NOT NULL,
          `data` int(11) NOT NULL COMMENT '日志内容',
          `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
          `updated_up` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`),
          KEY `api_id` (`api_id`),
          KEY `user_id` (`user_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api');
        Schema::dropIfExists('api_data');
        Schema::dropIfExists('log');
    }
}
