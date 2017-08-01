<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
class UsersController  extends  ControllerBase
{


    public function loginAction()
    {

    }

    public function logoutAction()
    {
        $this->session->remove('auth');
        $this->flash->success('Sucessfully logout!');

    }



    public function startAction()
    {

        $message = "";
        if ($this->request->isPost()) {

            $email = $this->request->getPost('UserName');
            $password = $this->request->getPost('Password');
            
            $user = users::findFirst(array(
                "(UserName = :UserName:) AND Password = :Password: AND IsActive = '1'",
                'bind' => array('UserName' => $email, 'Password' => sha1($password))
            ));
            if ($user != false) {
                $this->_registerSession($user);
                $this->flash->success('Welcome ' . $user->FirstName);
               // return $this->forward('index/index');
            }
 else {
   $this->flash->error('Wrong email/password');   
 }           
        }
    }


    private function _registerSession(Users $user)
    {
        $this->session->set('auth', array(
            'id' => $user->UserID,
            'name' => $user->FirstName,
            'utid'=>$user->UserTypeID          
        ));
    }
     
//      public function  loginuserAction($stu=null)
//           {      
//          if($stu != null)
//          {
//                $this->view->form= new createloginuserForm;              
//               $auth = $this->session->get('auth');            
//               $users=new users();
//               $guid=new GenerateGuid();                
//               $users->UserId=$guid->GUID();                               
//               $users->UserTypeId="5aaba0d9cdac711e59ded3417eb6fd879";    
//               $users->UserName=$this->request->getPost('Email');            
//               $users->Password=sha1("123456"); 
//               $users->FirstName=$this->request->getPost('FirstName');
//               $users->LastName=$this->request->getPost('LastName');                        
//               $users->ContNumPrimary=$this->request->getPost('ContNumPrimary');
//               $users->ContNumSecond=$this->request->getPost('ContNumSecond');              
//               $users->Address=$this->request->getPost('Address');               
//               $users->City=$this->request->getPost('City');              
//               $users->StudentID=$stu;
//                $date=new DateTime();
//                $users->RegisteredDate=$date->format('Y-m-d');//Date time generated;                                              
//                if ($users->save() == false) {                              
//                        foreach ($users->getMessages() as $message) {
//                        $this->flash->error((string)$message);
//                    }                
//            } else {
//              
//                $this->flash->success("Successfully created the user");
//            } 
//          }         
//    }
    
//     public function GetUserAction()
//    {
//
//        $this->view->form;
//
//        $numberPage = $this->request->getQuery("page", "int");
//        $depart = users::find();
//        if (count($depart) == 0) {
//            $this->flash->notice("The search did not find any Batch");
//        }
//        $paginator = new Paginator(array(
//            "data"  => $depart,
//            "limit" => 4,
//            "page"  => $numberPage
//        ));
//        $this->view->page = $paginator->getPaginate();
//    }
    
//     public function deleteUserAction($UserID = null)
//    {
//
//        $products = users::findFirstByUserId($UserID);
//        if (!$products) {
//            $this->flash->error("User was not found");          
//        }
//        if (!$products->delete()) {
//            foreach ($products->getMessages() as $message) {
//                $this->flash->error($message);
//            }           
//        }
//        $this->flash->success("User was deleted");        
//    }
    
   public function ChangePasswordAction()
    {
        $auth = $this->session->get('auth');
        $user_id = $auth['id'];

        if($user_id != null) {
            if ($this->request->isPost()) {

                $product = users::findFirst("UserID ='$user_id'");
                if (!$product) {
                    $this->flash->error("User Not Found");                   
                }
                else
                {
                    $NewPassword = $this->request->getPost('NewPassword');
                    $product->Password = sha1($NewPassword);
                    if ($product->save() == false) {
//                        foreach ($product->getMessages() as $message) {
//                            $this->flash->error((string) $message);
//                        }
                        
                        $this->flash->error('Error!');
                    } else {
                        $this->flash->success('Your Password was updated successfully');
                    }
                }
            }
        }
        else{
            return $this->forward('index/index');
        }
        
    }
      
}