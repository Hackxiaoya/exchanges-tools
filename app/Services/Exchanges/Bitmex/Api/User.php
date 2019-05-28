<?php
namespace App\Services\Exchanges\Bitmex\Api;

class User  
{
    static public  function get(array $data=[]){
        'GET';
        return '/api/v1/user';
        
        
    }
    
    static public  function getAffiliateStatus(array $data=[]){
        'GET';
        return '/api/v1/user/affiliateStatus';
        
        
        
    }
    
    static public  function postCancelWithdrawal(array $data=[]){
        'POST';
        return '/api/v1/user/cancelWithdrawal';
        
        
        
    }
    
    static public  function getCheckReferralCode(array $data=[]){
        'GET';
        return '/api/v1/user/checkReferralCode';
        
        
        
    }
    
    static public  function getCommission(array $data=[]){
        'GET';
        return '/api/v1/user/commission';
        
        
        
    }
    
    static public  function postCommunicationToken(array $data=[]){
        'POST';
        return '/api/v1/user/communicationToken';
        
        
        
    }
    
    static public  function postConfirmEmail(array $data=[]){
        'POST';
        return '/api/v1/user/confirmEmail';
        
        
        
    }
    
    static public  function postConfirmWithdrawal(array $data=[]){
        'POST';
        return '/api/v1/user/confirmWithdrawal';
        
        
        
    }
    
    static public  function getDepositAddress(array $data=[]){
        'GET';
        return '/api/v1/user/depositAddress';
        
        
        
    }
    
    static public  function getExecutionHistory(array $data=[]){
        'GET';
        return '/api/v1/user/executionHistory';
        
        
        
    }
    
    static public  function postLogout(array $data=[]){
        'POST';
        return '/api/v1/user/logout';
        
        
        
    }
    
    /**
     * 获取保证金余额
     * https://testnet.bitmex.com/api/v1/user/margin?currency=XBt
     * */
    static public  function getMargin(array $data=[]){
        'GET';
        return '/api/v1/user/margin';
        
        
        
    }
    
    static public  function getMinWithdrawalFee(array $data=[]){
        'GET';
        return '/api/v1/user/minWithdrawalFee';
        
        
        
    }
    
    static public  function postPreferences(array $data=[])
    {
        'POST';
        return '/api/v1/user/preferences';
        
        
        
    }
    
    static public  function postRequestWithdrawal(array $data=[])
    {
        'POST';
        return '/api/v1/user/requestWithdrawal';
        
        
        
    }
    
    /**
     * 获取钱包余额
     * https://testnet.bitmex.com/api/v1/user/wallet?currency=XBt
     * */
    static public  function getWallet(array $data=[]){
        'GET';
        return '/api/v1/user/wallet';
        
        
        
    }
    
    static public  function getWalletHistory(array $data=[]){
        'GET';
        return '/api/v1/user/walletHistory';
        
        
        
    }
    
    static public  function getWalletSummary(array $data=[]){
        'GET';
        return '/api/v1/user/walletSummary';
        
        
        
    }
}