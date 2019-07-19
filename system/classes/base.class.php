<?php

class base {

    public  $db;
    public  $oSmarty;

    function __construct() {


        $this->db = new mySql(DB_USER, DB_PASSWORD, DB_DATABASE, DB_HOST);
        $this->db->makeConnection();

        $this->oSmarty = new smarty();

        $this->oSmarty->template_dir = TEMPLATE_DIR;
        $this->oSmarty->compile_dir = TEMPLATE_C_DIR;

        $this->assign('base_url', BASE_URL);
        $this->assign('webadres', WEB_ADRES);

        if($_SESSION['is_admin'] == true){
            $this->assign('admin', '1');
        }
    }

    function assign($var, $value) {
        $this->oSmarty->assign($var, $value);
    }

    function assignContent($var, $content_template) {
        return $this->oSmarty->assign($var, $this->oSmarty->fetch(TEMPLATE_DIR . $content_template . '.html'));
    }

    function sanitize($in, $type = 'char') {
        return strip_tags(stripslashes($in));
    }

    function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['is_beheer']);
        unset($_SESSION['is_loggedin']);
        @$_SESSION['is_admin'] = false;
    }

    function is_beheerder() {
        return false;
        ####return (@$_SESSION['is_beheer'] == '1');
    }

    function is_loggedin() {
        return (@$_SESSION['is_loggedin'] == '1');
    }

    function get_user() {
        $getUsers = "SELECT naam FROM t_users WHERE pk_user = :pk_user";

        $this->db->select($getUsers, array(':pk_user' => @$_SESSION['user_id']));

        $user = $this->db->fetchOne();

        return $user;
    }

    function get_url() {
        if (isset($_SERVER['PATH_INFO'])) {
            $tmp = explode('/', substr($_SERVER['PATH_INFO'], 1));

            foreach ($tmp as $v)
                $url[] = $v;
        }

        return $url;
    }

}

?>