<?php

class accounts extends \Phalcon\Mvc\Model
{
 
    public $RowID;
 
    public $Date;
 
    public $Billno;
    
      public $Particulars;
        public $Debit;
          public $Credit;
            public $Uptdate;
              public $UserID;           

       
     public function initialize()
    {
        $this->belongsTo('UserID', 'users', 'UserID', array('alias' => 'users'));          
    }
    
    public function getSource()
    {
        return 'accounts';
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
