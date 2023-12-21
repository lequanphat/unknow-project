<?php
class Home extends Controller{
    public function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view("layouts/main.layout" , ["title" => "Home - index"]);
    }
    function temp(){
        $this->view("layouts/main.layout", ["title" => "Home - temp"]);
    }

}
?>