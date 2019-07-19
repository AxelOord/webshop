<?php

class router extends base {

    private $controller;
    private $url;

    function __construct() {
        parent::__construct();

        if (isset($_SERVER['PATH_INFO'])) {
            $tmp = explode('/', substr($_SERVER['PATH_INFO'], 1));

            foreach ($tmp as $v)
                $this->url[] = $v;
        } else {
            $this->url[] = DEFAULT_CONTROLLER;
        }
        $this->controller = $this->url[0];
    }

    function getUrlPart($part) {
        if (isset($this->url[$part]))
            return $this->url[$part];
        else
            return false;
    }

    function printUrl() {
        echo '<pre>' . print_r($this->url, true) . '</pre>';
    }

    function getController() {
        return $this->controller;
    }

}

?>