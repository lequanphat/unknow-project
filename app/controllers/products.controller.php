<?php
class Products extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->view("layouts/main.layout", ["title" => "Product - index"]);
    }
 
}
