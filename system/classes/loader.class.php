<?php
class Loader {
    protected function _init_class($class){
        $C = Controller::get_instance();
        $name = strtolower($class);
        $C->$name = new $class();
    }

    public function _class($library){
        if(is_array($library)){
            foreach($library as $class){
            $this->library($class);
            }
        return;
        }

        if($library == ''){
            return false;
        }

        $this->_init_class($library);
    }
}
?>