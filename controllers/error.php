<?php
class ErrorController extends Controller {
    function __construct() {
        parent::__construct();        
    }    

    function Index(){
        $this->view->render('error/index');
    }
}