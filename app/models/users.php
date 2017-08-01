<?php

class users extends \Phalcon\Mvc\Model
{
 
    public $UserID;
 
    public $UserTypeID;
 
    public $UserName;
    
      public $FirstName;
        public $LastName;
          public $Password;
            public $Address;
              public $Mobile;
              public $RegisteredDate;
              public $IsActive;

   
              
     public function initialize()
    {
        $this->belongsTo('UserTypeID', 'usertypes', 'UserTypeID', array('alias' => 'usertypes'));   
        
        $this->hasMany('UserID', 'accounts', 'UserID', array('alias' => 'accounts'));
        $this->hasMany('UserID', 'orders', 'UserID', array('alias' => 'orders'));
        $this->hasMany('UserID', 'events', 'UserID', array('alias' => 'events'));
       
    }
    
    public function getSource()
    {
        return 'users';
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
