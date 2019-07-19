<?php

class notfound extends controller
{

    function index()
    {
        $this->view->show('404/404');
    }
}

?>