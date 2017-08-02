<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
class EventsController extends ControllerBase
{

    public function indexAction()
    {

    }
    public function getusereventsAction()
    {           
        
        $auth = $this->session->get('auth');
        $UserID = $auth['id'];
        
        $numberPage = $this->request->getQuery("page", "int");       
        $depart = events::find("UserID=$UserID");
        if (count($depart) == 0) {
            $this->flash->notice("There are no Events");
        }
        $paginator = new Paginator(array(
            "data"  => $depart,
            "limit" => 4,
            "page"  => $numberPage
        ));
        $this->view->page = $paginator->getPaginate();                       
    }
}

