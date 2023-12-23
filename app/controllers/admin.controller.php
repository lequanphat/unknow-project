<?php
class Admin extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->view("layouts/admin.layout", ["page" => "dashboard"]);
    }
    function products()
    {
        $this->view("layouts/admin.layout", ["page" => "products"]);
    }
    function orders()
    {
        $this->view("layouts/admin.layout", ["page" => "orders"]);
    }
}
