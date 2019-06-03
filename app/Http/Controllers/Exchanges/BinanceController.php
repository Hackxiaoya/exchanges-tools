<?php

namespace App\Http\Controllers\Exchanges;

use Illuminate\Http\Request;
use App\Services\Exchanges\Binance\BinanceServices;

class BinanceController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $binance=new BinanceServices($request);
        //throw new \Exception('aaa');
        try {
            return response()->json($binance->run());
        }catch (\Exception $e){
            return response($e->getMessage().' line:'.$e->getLine(),503);
        }
    }
}
