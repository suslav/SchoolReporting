<?php

class usertypes extends \Phalcon\Mvc\Model
{ 
    public $UserTypeID;
 
    public $UserType;

   
    public function getSource()
    {
        return 'usertypes';
    }

      public function initialize()
    {
        $this->hasMany('UserTypeID', 'users', 'UserTypeID', array('alias' => 'users'));
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
