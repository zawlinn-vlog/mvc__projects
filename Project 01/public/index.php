<?php

require_once "../app/config.php";

new Core();



/*

$classname = 'Home';
$methodname = 'index';
$params = [];

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

$url = explode('/', $url);

if(!empty($url[0])) {

    if(file_exists("assets/app/".ucfirst($url[0]).".php")){
        $classname = ucfirst($url[0]);  
        unset($url[0]);
    }

}

require_once "assets/app/".$classname.".php";
$classname = new $classname();

if(!empty($url[1])) {
    
   if(method_exists($classname, $url[1])){
        $methodname = $url[1];
        unset($url[1]);
   }

}

$params = !empty($url) ? array_values($url) : [];


call_user_func([$classname, $methodname], $params);

*/

// echo "<pre>" . print_r($params, true) . "</pre>";




/*
$ary = ['one', 'two', 'three', 'four', 'five', 'six'];


echo "<pre>" . print_r($ary, true) . "</pre>";

unset($ary[0]);

echo "<br/>";

echo "<pre>" . print_r($ary, true) . "</pre>";

$aryval = array_values($ary);

echo "<br/>";


echo "<pre>" . print_r($aryval, true) . "</pre>";

*/