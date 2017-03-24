<?php

class About extends Controller {
    function __construct() {
        parent::__construct();
        echo 'we are in about<br />';
    }

    public function Us($arg = false){
        echo 'we are inside us <br />';
        echo 'Optional' .$arg;
        
        require 'models/about_model.php';
        $model = new About_Model();
    }
}
