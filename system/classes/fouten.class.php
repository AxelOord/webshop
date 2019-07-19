<?php
class fouten {
    private $errors = array();
    function count()
    {
        return count($this->errors);
    }

    function add($err, $msg = 1){
        $this->errors[$err] = $msg;
    }

    function get(){
        return $this->errors;
    }
}
?>