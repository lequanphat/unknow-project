<?php
class Controller {
    public function __construct() {
       
    }
    public function model($model){
        require_once "./app/models/".$model.".php";
        return new $model;
    }
    public function view($view, $params=["title" => "empty title"]){
        require_once "./app/views/".$view.".php";
    }
}
?>