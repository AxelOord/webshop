<?php

class view extends base {

    public $errors;
    private $flash_message = '';

    function __construct() {
        parent::__construct();

        $this->errors = new fouten();

        $this->assign('js_url', JS_URL);
        $this->assign('css_url', CSS_URL);
        $this->assign('img_url', IMG_URL);
    }

    function setMessage($msg) {
        $this->flash_message = $msg;
    }

    function mainMenu() {
        $this->assignContent('main_menu', 'main_menu');
    }

    function show($content_template = '') {


        // Sessie gebonden data toekennen aan view
        $this->assign('is_beheerder', $this->is_beheerder());
        $this->assign('systeem_melding', $this->flash_message);

        // Eventuele errors toekennen aan view
        $this->assign('errors', (object) $this->errors->get());
        // Login
        $this->assign('is_loggedin', $this->is_loggedin());
        $this->assign('user_id', @$_SESSION['user_id']);
        $this->assign('user_name', $this->get_user());
        $this->assign('url', $this->get_url());

        // Content template van huidige module toekennen aan de view
        if ($content_template <> '')
            $this->assignContent('content', $content_template);

        // Widgets toekennen aan de view
        $this->mainMenu();

        // Parse uiteindelijke master template en spool naar de browser
        $this->oSmarty->display(MASTER_TEMPLATE . '.html');
    }

}

class login_view extends base {

    public $errors;
    private $flash_message = '';

    function __construct() {
        parent::__construct();

        $this->errors = new fouten();

        $this->assign('js_url', JS_URL);
        $this->assign('css_url', CSS_URL);
        $this->assign('img_url', IMG_URL);

    }

    function setMessage($msg) {
        $this->flash_message = $msg;
    }

    function show($content_template = '') {
        // Sessie gebonden data toekennen aan view
        $this->assign('systeem_melding', $this->flash_message);

        // Eventuele errors toekennen aan view
        $this->assign('errors', (object) $this->errors->get());

        // Content template van huidige module toekennen aan de view
        if ($content_template <> '')
            $this->assignContent('content', $content_template);


        $this->oSmarty->display('login/login.html');


    }


}
?>