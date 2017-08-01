<?php

class orders extends \Phalcon\Mvc\Model
{
 
    public $OrderID;
 
    public $ProductName;
 
    public $OrderedQnty;
    
    public $DeliveredQnty;
    public $BalanceQuantity;         
    public $UserID;           

       
     public function initialize()
    {
        $this->belongsTo('UserID', 'users', 'UserID', array('alias' => 'users'));          
    }
    
    public function getSource()
    {
        return 'orders';
    }

   
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

  
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
 
}
