<?php

class Controller{

    public function views($dir, $data = []){
        //
        $path = file_exists("../app/views/". $dir . ".php");

        // var_dump($path);

        if($path) {
            require_once "../app/views/" . $dir . ".php";
        }
    }

    public function modals($modal){

        $path = file_exists("../app/modals/" . $modal . ".php");

        var_dump($path);

        if($path){
            
            require_once "../app/modals/" . $modal . ".php";

            return new $modal();
        }
        
    }
}

