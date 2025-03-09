<?php

class Core{

    private $cname = "Home";
    private $mname = "index";
    private $params = [];

    private $instance;

    public function __construct()
    {
        # GET URL AND EXPLOAD BY "/" to config class name, method name and params;

        $url = isset($_GET['url']) ? explode("/", rtrim($_GET['url'], '/')) : '';

        // ChkErr::check($url);

        if(!empty($url)){
            
            $dir = file_exists("../app/controllers/" . ucfirst($url[0]) . ".php");

            // var_dump($dir);

            if($dir){
                $this->cname = ucfirst($url[0]);
                unset($url[0]);
            }
        }

        require_once "../app/controllers/" . $this->cname . ".php";

        $this->instance = new $this->cname();

        if(!empty($url[1])){
           if(method_exists($this->instance, $url[1])){
            // echo "TRUE";
            $this->mname = $url[1];
            unset($url[1]);
           }
        }

        $this->params = !empty($url) ? array_values($url) : [];

        // ChkErr::check($this->params);

        call_user_func([$this->instance, $this->mname], $this-> params);

        
    }
}