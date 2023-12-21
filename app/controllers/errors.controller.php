<?php
class Errors extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $this->view("layouts/empty.layout", ["page"=>"errors/Page404"]);
    }
    public function unknow_error(){
        $this->view("layouts/empty.layout", ["page"=>"errors/UnknowError"]);
    }

}
?>