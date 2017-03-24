<?php
class ErrorController extends Controller {
    function __construct() {
        parent::__construct();
        echo 'This is an error <br />';
        $this->view->msg = 'This Page Doesnt Exists';
        $this->view->render('error/index');
    }    
}