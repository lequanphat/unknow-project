<?php
    class Auth extends Controller{
        public function __construct() {
            parent::__construct();
        }
        public function login(){
            $this->view("layouts/empty.layout", ['page' => 'auth/login']);
        }
        public function register(){
            $this->view("layouts/empty.layout", ['page' => 'auth/register']);
        }
    }

?>