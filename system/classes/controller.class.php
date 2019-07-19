<?php

class controller extends base {

    public $view;
    public $load;
    public $user;
    public $clientmodel;
    public $pk_client;

    function index() {
        $this->view->show(get_class($this));
    }

    function setupView() {
        $this->view = new view();
    }

    function __construct() {


        parent::__construct();
        $this->view = new view();
        $this->load = new load();
        $this->setupView();

        $function = url(1);

        if ($function <> '' and method_exists($this, $function))
            $this->$function();
        else
            $this->index();
    }

    /**
     * @param $var
     * @return string
     */
    function get($var) {
        if (@$_GET[$var] <> '')
            return( $this->sanitize($_GET[$var]));
        else
            return '';
    }

    /**
     * @param $var
     * @return string
     */
    function post($var) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return( $this->sanitize(@$_POST[$var]));
        else
            return '';
    }

    /**
     * @param $var
     * @return string
     */
    function post_oms($var) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST[$var];
        else
            return '';
    }

    /**
     * @param $url
     */
    function redirect($url) {
        header('Location: ' . BASE_URL . $url);
        die();
    }



    /**
     * @param $id
     */
    function set_loggedin($id) {
        @$_SESSION['is_loggedin'] = true;
        @$_SESSION['user_id'] = $id;
    }

    function set_admin() {
        @$_SESSION['is_admin'] = true;
    }


    function set_loggedin_beheer($id) {
        @$_SESSION['is_loggedin'] = true;
        @$_SESSION['is_beheer'] = $id;
    }

    function getUserId() {
        if (@$_SESSION['is_loggedin'] == true)
            return @$_SESSION['user_id'];
        else
            return 0;
    }

    function is_loggedin() {
        if (@$_SESSION['is_loggedin'] == true)
            return true;
        else
            return false;
    }

    /**
     * @return bool
     */
    function is_beheerder() {
        if (@$_SESSION['is_beheer'] == 1)
            return true;
        else
            return false;
    }

    /**
     * @param bool|FALSE $bFromDatabase
     * @param int $iSelDay
     * @param int $iSelMonth
     * @param int $iSelYear
     * @param bool|FALSE $bFollow
     * @param bool|FALSE $bSearch
     */
    function setDates($bFromDatabase = FALSE, $iSelDay = 0, $iSelMonth = 0, $iSelYear = 0, $bFollow = FALSE, $bSearch = FALSE) {

        $aDays = range(1, 31);
        $aDaysCash = range(01, 31);

        $aiMonths = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
        $asMonths = array('Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December');


        if ($bFollow == FALSE) {

            $aYears = range(date('Y') - 120, date('Y'));
        } else {

            $aYears = range(date('Y'), date('Y') + 2);
        }


        if ($bFromDatabase == FALSE && $bFollow == FALSE && $bSearch == FALSE) {

            $iSelDay = (isset($_POST['day']) ? $_POST['day'] : 1);
            $iSelMonth = (isset($_POST['month']) ? $_POST['month'] : 6);
            $iSelYear = (isset($_POST['year']) ? $_POST['year'] : 1980);
        } else if ($bFollow == TRUE) {

            $iSelDay = (isset($_POST['day']) ? $_POST['day'] : date('j'));
            $iSelMonth = (isset($_POST['month']) ? $_POST['month'] : date('n'));
            $iSelYear = (isset($_POST['year']) ? $_POST['year'] : date('Y'));
        } else if ($bSearch == TRUE) {

            $iSelDay = 0;
            $iSelMonth = 0;
            $iSelYear = 0;
        }

        $aRegYears=range(date('Y')-15, date('Y') + 2);

        $this->view->assign('aDays', $aDays);
        $this->view->assign('aDaysCash', $aDaysCash);
        $this->view->assign('iSelDay', $iSelDay);


        $this->view->assign('iMonth', $aiMonths);
        $this->view->assign('sMonth', $asMonths);
        $this->view->assign('iSelMonth', $iSelMonth);

        $this->view->assign('aYears', $aYears);
        $this->view->assign('iSelYear', $iSelYear);

        $this->view->assign('aRegYears', $aRegYears);


    }
}
?>