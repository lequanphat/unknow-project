<?php
require_once './app/controllers/index.controller.php';
class App
{
    public $controller = "home";
    public $method = "index";
    public $params = [];
    public function __construct()
    {
        $url = $this->handleParseUrl();
        if ($url != NULL) {
            if (file_exists("./app/controllers/" . $url[0] . ".controller.php")) {
                $this->controller = $url[0];
                unset($url[0]);
            } else {
                $this->controller = "errors";
            }
        }
        require_once "./app/controllers/" . $this->controller . ".controller.php";
        $this->controller = new $this->controller;
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
            } else {
                $this->controller = 'errors';
                require_once "./app/controllers/" . $this->controller . ".controller.php";
                $this->controller = new $this->controller;
            }
            unset($url[1]);
        }
        // Params
        $this->params = $url ? array_values($url) : [];
        try {
            call_user_func_array([$this->controller, $this->method], $this->params);
        } catch (Error $e) {
            $this->controller = 'errors';
            require_once "./app/controllers/" . $this->controller . ".controller.php";
            $this->controller = new $this->controller;
            $this->method = 'index';
            call_user_func_array([$this->controller, $this->method], []);
        }
    }
    public function handleParseUrl()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}

$app = new App();
