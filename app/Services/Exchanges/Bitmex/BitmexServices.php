<?php
/**
 * @author lin <465382251@qq.com>
 * */
namespace App\Services\Exchanges\Bitmex;

use App\Services\Exchanges\BaseServices;
use App\Services\Exchanges\Bitmex\Api\Announcement;
use App\Services\Exchanges\Bitmex\Api\ApiKey;
use App\Services\Exchanges\Bitmex\Api\Order;
use App\Services\Exchanges\Bitmex\Api\Position;
use App\Services\Exchanges\Bitmex\Api\User;
use App\Services\Exchanges\Bitmex\Api\Base;


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
                switch ($this->method){
                    case 'get':{
                        if($this->url=='/api/v1/announcement') return Announcement::get($this->data);
                        if($this->url=='/api/v1/announcement/urgent') return Announcement::getUrgent($this->data);
                    }
                }
            }
            case 'apikey':{
                switch ($this->method){
                    case 'get':{
                        if($this->url=='/api/v1/announcement') return Announcement::get($this->data);
                        if($this->url=='/api/v1/announcement/urgent') return Announcement::getUrgent($this->data);
                    }
                    case 'post':{
                        if($this->url=='/api/v1/apiKey') return ApiKey::post($this->data);
                        if($this->url=='/api/v1/apiKey/disable') return ApiKey::postDisable($this->data);
                        if($this->url=='/api/v1/apiKey/enable') return ApiKey::postEnable($this->data);
                    }
                    case 'delete':{
                        if($this->url=='/api/v1/apiKey') return ApiKey::delete($this->data);
                    }
                }
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
                switch ($this->method){
                    case 'get':{
                        if($this->url=='/api/v1/order') return Order::get($this->data);
                    }
                    case 'post':{
                        if($this->url=='/api/v1/order') return Order::post($this->data);
                    }
                    case 'put':{
                        if($this->url=='/api/v1/order') return Order::put($this->data);
                    }
                    case 'delete':{
                        if($this->url=='/api/v1/order') return Order::delete($this->data);
                        if($this->url=='/api/v1/order/all') return Order::deleteAll($this->data);
                    }
                }
            }
            case 'orderbook':{
                break;
            }
            case 'position':{
                switch ($this->method){
                    case 'get':{
                        if($this->url=='/api/v1/position') return Position::get($this->data);
                    }
                    case 'post':{
                        if($this->url=='/api/v1/position/leverage') return Position::postLeverage($this->data);
                    }
                }
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
                switch ($this->method){
                    case 'get':{
                        if($this->url=='/api/v1/user') return User::get($this->data);
                        if($this->url=='/api/v1/user/affiliateStatus') return User::getAffiliateStatus($this->data);
                        if($this->url=='/api/v1/user/checkReferralCode') return User::getCheckReferralCode($this->data);
                        if($this->url=='/api/v1/user/commission') return User::getCommission($this->data);
                        if($this->url=='/api/v1/user/depositAddress') return User::getDepositAddress($this->data);
                        if($this->url=='/api/v1/user/executionHistory') return User::getExecutionHistory($this->data);
                        if($this->url=='/api/v1/user/margin') return User::getMargin($this->data);
                        if($this->url=='/api/v1/user/minWithdrawalFee') return User::getMinWithdrawalFee($this->data);
                        if($this->url=='/api/v1/user/wallet') return User::getWallet($this->data);
                        if($this->url=='/api/v1/user/walletHistory') return User::getWalletHistory($this->data);
                        if($this->url=='/api/v1/user/walletSummary') return User::getWalletSummary($this->data);
                    }
                    case 'post':{
                        if($this->url=='/api/v1/user/cancelWithdrawal') return User::postCancelWithdrawal($this->data);
                        if($this->url=='/api/v1/user/communicationToken') return User::postCommunicationToken($this->data);
                        if($this->url=='/api/v1/user/confirmEmail') return User::postConfirmEmail($this->data);
                        if($this->url=='/api/v1/user/logout') return User::postLogout($this->data);
                        if($this->url=='/api/v1/user/preferences') return User::postPreferences($this->data);
                        if($this->url=='/api/v1/user/requestWithdrawal') return User::postRequestWithdrawal($this->data);
                    }
                }
            }
            case 'userevent':{
                break;
            }
        }
        
        return [];
    }
    
    public function run(){
        Base::$uid=$this->id;
        Base::$method=$this->method;
        Base::$url=$this->url;
        Base::$type=$this->type;
        Base::$data=$this->data;
        
        return (array) $this->setMap();
    }
}