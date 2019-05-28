<?php
namespace App\Services\Exchanges\Bitmex;

use App\Services\Exchanges\BaseServices;
use App\Services\Exchanges\Bitmex\Api\Announcement;
use App\Services\Exchanges\Bitmex\Api\ApiKey;
use App\Services\Exchanges\Bitmex\Api\Order;
use App\Services\Exchanges\Bitmex\Api\Position;
use App\Services\Exchanges\Bitmex\Api\User;


class BitmexServices extends BaseServices
{
    /**
     * 获取当前请求执行方法
     * */
    protected function getAction(){
        return strtolower($this->path[4]);
    }
    
    /**
     * 接口映射
     * */
    protected function setMap(){
        switch ($this->getAction()){
            case 'announcement':{
                return [
                    'get'=>[
                        '/api/v1/announcement'=>Announcement::get($this->data),
                        '/api/v1/announcement/urgent'=>Announcement::getUrgent($this->data),
                    ],
                ];
            }
            case 'apikey':{
                return [
                    'get'=>[
                        '/api/v1/apiKey'=>ApiKey::get($this->data),
                    ],
                    'post'=>[
                        '/api/v1/apiKey'=>ApiKey::post($this->data),
                        '/api/v1/apiKey/disable'=>ApiKey::postDisable($this->data),
                        '/api/v1/apiKey/enable'=>ApiKey::postEnable($this->data),
                    ],
                    'delete'=>[
                        '/api/v1/apiKey'=>ApiKey::delete($this->data),
                    ],
                ];
            }
            case 'chat':{
                break;
            }
            case 'execution':{
                break;
            }
            case 'funding':{
                break;
            }
            case 'globalnotification':{
                break;
            }
            case 'instrment':{
                break;
            }
            case 'insurance':{
                break;
            }
            case 'leaderboard':{
                break;
            }
            case 'liquidation':{
                break;
            }
            case 'order':{
                return [
                    'get'=>[
                        '/api/v1/order'=>Order::get($this->data),
                    ],
                    'post'=>[
                        '/api/v1/order'=>Order::post($this->data),
                    ],
                    'put'=>[
                        '/api/v1/order'=>Order::put($this->data),
                    ],
                    'delete'=>[
                        '/api/v1/order'=>Order::delete($this->data),
                        '/api/v1/order/all'=>Order::deleteAll($this->data),
                    ],
                ];
            }
            case 'orderbook':{
                break;
            }
            case 'position':{
                return [
                    'get'=>[
                        '/api/v1/position'=>Position::get($this->data),
                    ],
                    'post'=>[
                        '/api/v1/position/leverage'=>Position::postLeverage($this->data),
                    ],
                ];
            }
            case 'quote':{
                break;
            }
            case 'schema':{
                break;
            }
            case 'settlement':{
                break;
            }
            case 'stats':{
                break;
            }
            case 'trade':{
                break;
            }
            case 'user':{
                return [
                    'get'=>[
                        '/api/v1/user'=>User::get($this->data),
                        '/api/v1/user/affiliateStatus'=>User::getAffiliateStatus($this->data),
                        '/api/v1/user/checkReferralCode'=>User::getCheckReferralCode($this->data),
                        '/api/v1/user/commission'=>User::getCommission($this->data),
                        '/api/v1/user/depositAddress'=>User::getDepositAddress($this->data),
                        '/api/v1/user/executionHistory'=>User::getExecutionHistory($this->data),
                        '/api/v1/user/margin'=>User::getMargin($this->data),
                        '/api/v1/user/minWithdrawalFee'=>User::getMinWithdrawalFee($this->data),
                        '/api/v1/user/wallet'=>User::getWallet($this->data),
                        '/api/v1/user/walletHistory'=>User::getWalletHistory($this->data),
                        '/api/v1/user/walletSummary'=>User::getWalletSummary($this->data),
                    ],
                    'post'=>[
                        '/api/v1/user/cancelWithdrawal'=>User::postCancelWithdrawal($this->data),
                        '/api/v1/user/communicationToken'=>User::postCommunicationToken($this->data),
                        '/api/v1/user/confirmEmail'=>User::postConfirmEmail($this->data),
                        '/api/v1/user/confirmWithdrawal'=>User::postConfirmWithdrawal($this->data),
                        '/api/v1/user/logout'=>User::postLogout($this->data),
                        '/api/v1/user/preferences'=>User::postPreferences($this->data),
                        '/api/v1/user/requestWithdrawal'=>User::postRequestWithdrawal($this->data),
                    ],
                ];
            }
            case 'userevent':{
                break;
            }
        }
        
        return [];
    }
    
    public function run(){
        /* echo $this->id."\n";
        echo $this->method."\n";
        echo $this->url."\n";
        echo $this->type."\n"; */
        //print_r($this->data);
        $map=$this->setMap();
        
        return (array)$map[$this->method][$this->url];
    }
}