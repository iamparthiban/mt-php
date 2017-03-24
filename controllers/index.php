<?php

class Index extends Controller {
    function __construct() {
        parent::__construct();
        echo 'We are in Index';

        $this->view->msg('This Page Doesnt Exists');
        $this->view->render('index/index');
    }
}
?>