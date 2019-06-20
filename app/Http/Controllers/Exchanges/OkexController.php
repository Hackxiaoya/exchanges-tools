<?php
/**
 * @author lin <465382251@qq.com>
 * */
namespace App\Http\Controllers\Exchanges;

use Illuminate\Http\Request;
use App\Services\Exchanges\Okex\OkexServices;

class OkexController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $okex=new OkexServices($request);
        
        try {
            return response()->json($okex->run());
        }catch (\Exception $e){
            return response($e->getMessage().' line:'.$e->getLine(),503);
        }
    }
}
