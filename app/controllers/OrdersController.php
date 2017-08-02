<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
class OrdersController extends ControllerBase
{

    public function indexAction()
    {

    }
    public function getuserordersAction()
    {           
        
        $auth = $this->session->get('auth');
        $UserID = $auth['id'];
        
        $numberPage = $this->request->getQuery("page", "int");       
        $depart = orders::find("UserID=$UserID");
        if (count($depart) == 0) {
            $this->flash->notice("There are no Orders");
        }
        $paginator = new Paginator(array(
            "data"  => $depart,
            "limit" => 4,
            "page"  => $numberPage
        ));
        $this->view->page = $paginator->getPaginate();                       
    }
}

