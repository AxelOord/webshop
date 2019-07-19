<?php

class profile extends controller
{

    function index()
    {
        $this->load->model('user');
        $user = new user();
        if(!isset($_SESSION['user_id'])){
            $this->redirect('inloggen');
        }
        $this->view->show('profile/profile');
    }

    function shoppingcart()
    {
        $this->load->model('user');
        $user = new user();
        if(!isset($_SESSION['user_id'])){
            $this->redirect('inloggen');
        }

        if ($this->post('pk_aankoop') <> '') {
            $data = (object)array('pk_aankoop' => $this->post('pk_aankoop'));
            $user->deleteShoppingcart($data);
            $this->redirect('profile/shoppingcart');
        }

        $this->view->assign('products', $user->getshoppingcart($_SESSION['user_id']));
        $this->view->show('profile/shoppingcart');
    }
}

?>