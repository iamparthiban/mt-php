<?php

class About{
    function __construct() {
        echo 'we are in about<br />';
    }

    public function Us($arg = false){
        echo 'we are inside us <br />';
        echo 'Optional' .$arg;
    }
}
