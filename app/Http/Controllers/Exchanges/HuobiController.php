<?php
/**
 * @author lin <465382251@qq.com>
 * */
namespace App\Http\Controllers\Exchanges;

use Illuminate\Http\Request;
use App\Services\Exchanges\Huobi\HuobiServices;

class HuobiController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $huobi=new HuobiServices($request);
        
        try {
            return response()->json($huobi->run());
        }catch (\Exception $e){
            return response($e->getMessage().' line:'.$e->getLine(),503);
        }
    }
}
