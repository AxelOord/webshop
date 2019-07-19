<?php

class uitloggen extends controller
{
    function index()
    {
        $this->logout();
        header('Location: ' . 'home');
        die();
    }
}

?>