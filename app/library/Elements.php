<?php

use Phalcon\Mvc\User\Component;


class Elements extends Component
{

    private $_headerMenu = array(
        'navbar-left' => array(

        ),
        'navbar-right' => array(
            'users' => array(
                'controller'=>'users',
//                'caption' => 'Log In/Sign Up',
                'caption' => 'Log In',
                'action' => 'login'
            ),
        ));

    public function getMenu()
    {


        //Common Menu for all

        $arrayOfLinks =   array(
            '0' => array(
                'controller'=>'index',
                'caption' => 'Home',
                'action' => 'index'
            )
        );

        $auth = $this->session->get('auth');

        if ($auth)
        {

            $this->_headerMenu['navbar-right']['users'] = array(
                'controller'=>'users',
                'caption' => 'Log Out',
                'action' => 'logout'
            );



            $config = include APP_PATH . "/app/config/config.php";


            if($auth['utid'] == $config['UserTypes']['Admin'])
            {


                //Menu items for admin login

                $arrayOfLinks += array(                 
//                    ,
//                     "Add User" => array(
//                        'controller'=>'users',
//                        'caption' => 'Add User',
//                        'action' => 'loginuser'
//                    )

                );


            }
            
            else if($auth['utid'] == $config['UserTypes']['User'])
            {
                     $arrayOfLinks += array(                   
                    
//                    ,                   
                    "Accounts" => array(
                        'controller'=>'Accounts',
                        'caption' => 'Accounts',
                        'action' => 'GetUserAccounts'
                    )
                );
            }
        }
        else
        {
             $arrayOfLinks += array(                                               
//                    "Students" => array(
//                        'controller'=>'Students',
//                        'caption' => 'Students',
//                        'action' => 'AddStudent'
//                    )
                );
            //Remove Items if they logout

           // unset($this->_headerMenu['navbar-left']['invoices']);
         //   unset($this->_headerMenu['navbar-left']['admin']);
           // unset($this->_headerMenu['navbar-left']['chartedAccountant']);

            $this->_headerMenu['navbar-right']['users'] = array(
                'controller'=>'users',
//                'caption' => 'Log In/Sign Up',
                  'caption' => 'Log In',
                'action' => 'login'
            );

        }



        $this->_headerMenu['navbar-left'] =$arrayOfLinks;



        $controllerName = $this->view->getControllerName();




        foreach ($this->_headerMenu as $position => $menu)
        {
            echo '<div class="nav-collapse">';


            echo '<ul class="nav navbar-nav ', $position, '">';

            foreach ($menu as $menuItems => $option )
            {


                if(array_key_exists("action", $option ))
                {


                    if ($controllerName == $option["controller"])
                    {
                        echo '<li class="active">';
                    }
                    else
                    {
                        echo '<li>';
                    }
                    echo $this->tag->linkTo($option["controller"] . '/' . $option['action'], $option['caption']);


                    echo'</li>';
                }
                else
                {
                    if ($controllerName == $menuItems)
                    {
                        echo '<li class="dropdown active">';
                    }
                    else
                    {
                        echo '<li class="dropdown">';
                    }


                    echo '<a class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="false">'.$menuItems .'<span class="caret"></span></a>';
                    echo '<ul class="dropdown-menu">';
                    foreach ($option as $subIndex => $subLinks )
                    {
                        echo '<li>';
                        echo $this->tag->linkTo($subLinks['controller'] . '/' . $subLinks['action'], $subLinks['caption']);
                        echo'</li>';

                    }
                    echo '</ul>';
                    echo'</li>';
                }


            }


            echo '</ul>';
            echo '</div>';
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
