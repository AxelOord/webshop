<?php

class load extends base {

    function model($model = ''){
        if (file_exists( MODEL_DIR . $model . '.model.php' )) {
            require_once( MODEL_DIR . $model . '.model.php' );
        }
    }

}
?>