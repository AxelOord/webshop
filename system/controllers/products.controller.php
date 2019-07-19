<?php

class products extends controller
{

    function index()
    {
        $admin_m = new admin_m();
        $this->view->assign('products', $admin_m->get_products_show());
        $this->view->assign('highlight', $admin_m->get_products_highlight());

        $this->view->show('products/products');
    }

    function item()
    {
        $admin_m = new admin_m();
        $user = new user();
        $url = $this->get_url();
        $url = $url[2];

        if ($this->post('aankoop') <> '') {
            if($this->is_loggedin() == true){
                $data = (object)array('product' => $url
                , 'klant' => $_SESSION['user_id']
                );
                $user->addAankoop($data);
                $this->redirect('profile/shoppingcart');
            }
            else{
                $this->redirect('products');
            }
        }

        $this->view->assign('product', $admin_m->get_product($url));
        $this->view->show('products/item');
    }


}

?>