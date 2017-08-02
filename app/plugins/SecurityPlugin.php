<?php

use Phalcon\Acl;
use Phalcon\Acl\Role;
use Phalcon\Acl\Resource;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Acl\Adapter\Memory as AclList;

 
class SecurityPlugin extends Plugin
{

	 
	public function getAcl()
	{
       // $this->debug_to_console("1");
        
        $this->persistent->destroy();

      if(!isset($this->persistent->acl))
       {
          // $this->debug_to_console("2");

            $acl = new AclList();

            // Default action is deny access
            $acl->setDefaultAction(Acl::DENY);


            //Creating Roles


            $roles = [
                'Admin'  => new Role(
                    'Admin',
                    'Member privileges, granted after sign in.'
                ),                
                'User' => new Role(
                    'User',
                    'Member privileges, granted after sign in.'
                ),
                'Guest' => new Role(
                    'Guest',
                    'Anyone browsing the site who is not signed in is considered to be a "Guest".'
                ),
            ];


           // Adding Roles

           foreach ($roles as $role) {
               $acl->addRole($role);
           }


           //Now Defining Resource



            //Public Resource  ----------------------------------------------------------



              //Creating Public Resource

            $publicResources = array(
                'users'      => array('login','logout','start'),
                 'index' => array('index'),
                'errors'     => array('show401', 'show404', 'show500'),
            );



           //Adding  Public  Resources

            foreach ($publicResources as $resource => $actions) {
                $acl->addResource(new Resource($resource), $actions);
            }




            //Grant access to public areas to both users and guests

            foreach ($roles as $role)
            {
                foreach ($publicResources as $resource => $actions)
                {
                    foreach ($actions as $action)
                    {
                        $acl->allow($role->getName(), $resource, $action);
                    }
                }
            }



            //End Pulic Resource Adding -------------------------------------------------------------------------

 




           //Admin  Resource  -----------------------------------------------------------------------------------------



           // Creating  Admin  resources


           $adminResources = array(
               'users'  => array('changepassword')              
           );



           //Adding Admin  Resources

           foreach ($adminResources as $resource => $actions)
           {
               $acl->addResource(new Resource($resource), $actions);
           }



           //    Grant access to Admin area to role User
           foreach ($adminResources as $resource => $actions)
           {
               foreach ($actions as $action)
               {
                   $acl->allow('Admin', $resource, $action);
               }
           }
           
            $guestResources = array(
              
              // 'Course' => array('GetPublicCourse'),
             
           );



           
           foreach ($guestResources as $resource => $actions)
           {
               $acl->addResource(new Resource($resource), $actions);
           }



          
           foreach ($guestResources as $resource => $actions)
           {
               foreach ($actions as $action)
               {
                   $acl->allow('Guest', $resource, $action);
               }
           }


           //End  Admin  Resource  -----------------------------------------------------------------------------------------

             $userResources = array(
              'accounts'  => array('getuseraccounts'),  
              'users'  => array('changepassword'),       
              'events'  => array('getuserevents'), 
              'orders'  => array('getuserorders'), 
           );



           //Adding   Resources

           foreach ($userResources as $resource => $actions)
           {
               $acl->addResource(new Resource($resource), $actions);
           }



           //    Grant access to   area to role User
           foreach ($userResources as $resource => $actions)
           {
               foreach ($actions as $action)
               {
                   $acl->allow('User', $resource, $action);
               }
           }


           //End     Resource  -----------------------------------------------------------------------------------------



           //The acl is stored in session, APC would be useful here too
            $this->persistent->acl = $acl;


      }
            return $this->persistent->acl;
	}

	/**
	 * This action is executed before execute any action in the application
	 *
	 * @param Event $event
	 * @param Dispatcher $dispatcher
	 * @return bool
	 */
	public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
	{


		$auth = $this->session->get('auth');

		if (!$auth){

			$role = 'Guest';
		}
		else {


            $config = include APP_PATH . "/app/config/config.php";

            if($auth['utid'] == $config['UserTypes']['Admin'])
            {
                $role = 'Admin';
            }           
            else if($auth['utid'] == $config['UserTypes']['User'])
            {
                $role = 'User';
            }
		}
               
		$controller = $dispatcher->getControllerName();

		$action = $dispatcher->getActionName();
 
                
                
        // Obtain the ACL list
        $acl = $this->getAcl();


        if (!$acl->isResource($controller)) {
            $dispatcher->forward([
                'controller' => 'errors',
                'action'     => 'show404'
            ]);

            return false;
        }




        // Check if the Role have access to the controller (resource)
        $allowed = $acl->isAllowed($role, $controller, $action);
        if ($allowed != Acl::ALLOW)
        {

            // If he doesn't have access forward him to the index controller
            $this->flash->error("You don't have access to this module");
            $dispatcher->forward(
                array(
                    'controller' => 'errors',
         			'action'     => 'show401'
                )
            );
            // Returning "false" we tell to the dispatcher to stop the current operation
            return false;
        }








	}

    function debug_to_console( $data ) {

        if (is_array( $data ))
            $output =  "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
        else
            $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

        echo $output;
    }


}
