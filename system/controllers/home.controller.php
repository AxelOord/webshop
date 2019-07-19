<?php

class home extends controller
{

    function index()
    {
        $this->load->model('user');
        $user = new user();
        $admin_m = new admin_m();
        $this->view->assign('products', $admin_m->get_products_discount());
        $this->view->assign('users', $user->getUsers());

        $this->view->show('home/home');
    }
}

?>