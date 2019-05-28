<?php
namespace App\Services\Exchanges\Bitmex\Api;

class Instrument  
{
    static public  function get(array $data=[]){
        
        return '/api/v1/instrument';
        
        
        
    }
    
    static public  function getActive(array $data=[]){
        
        return '/api/v1/instrument/active';
        
        
        
    }
    
    static public  function getActiveAndIndices(array $data=[]){
        
        return '/api/v1/instrument/activeAndIndices';
        
        
        
    }
    
    static public  function getActiveIntervals(array $data=[]){
        
        return '/api/v1/instrument/activeIntervals';
        
        
        
    }
    
    static public  function getCompositeIndex(array $data=[]){
        
        return '/api/v1/instrument/compositeIndex';
        
        
        
    }
    
    static public  function getIndices(array $data=[]){
        
        return '/api/v1/instrument/indices';
        
        
        
    }
}