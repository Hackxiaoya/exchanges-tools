<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BinanceApiSeeder::class);
        $this->call(BitmexApiSeeder::class);
        $this->call(HuobiApiSeeder::class);
        $this->call(OkexApiSeeder::class);
    }
}
