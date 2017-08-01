<?php

class events extends \Phalcon\Mvc\Model
{
 
    public $EventID;
 
    public $Date;
 
    public $Particulars;
    
    public $Representative;
    public $Remarks;         
    public $Status;
    public $UserID;           

       
     public function initialize()
    {
        $this->belongsTo('UserID', 'users', 'UserID', array('alias' => 'users'));          
    }
    
    public function getSource()
    {
        return 'events';
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
