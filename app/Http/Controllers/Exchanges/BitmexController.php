<?php

namespace App\Http\Controllers\Exchanges;

use Illuminate\Http\Request;
use App\Services\Exchanges\Bitmex\BitmexServices;

class BitmexController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bitmex=new BitmexServices($request);
        
        $bitmex->run();
    }
}
