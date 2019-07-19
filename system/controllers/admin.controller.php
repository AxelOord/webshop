<?php

class admin extends controller
{

    function index()
    {
        $this->load->model('user');
        $admin_m = new admin_m();
        $this->view->assign('products', $admin_m->get_products());
        $this->view->show('admin/admin');
    }

    function edit()
    {
        $admin_m = new admin_m();
        $user = new user();
        $url = $this->get_url();
        $url = $url[2];

        if ($this->post('opslaan') <> '') {
            $data = (object)array('pk_product' => $this->post('pk_product')
            , 'merk'            => $this->post('merk')
            , 'model'           => $this->post('model')
            , 'prijs'           => $this->post('prijs')
            , 'aantal'          => $this->post('aantal')
            , 'korting'         => $this->post('korting')
            , 'beschrijving'    => $this->post('beschrijving')
            , 'discount'        => $this->post('discount')
            );
            $admin_m->editProduct($data);
            $this->redirect('admin');
        }

        if ($this->post('delete') <> '') {
            $data = (object)array('pk_product' => $this->post('pk_product')
            );
            $admin_m->deleteProduct($data);
            $this->redirect('admin');
        }

        $this->view->assign('product', $admin_m->get_admin_product($url));
        $this->view->show('admin/edit');
    }
}

?>