<?php

// require_once "../app/libs/Core.php";
// require_once "../app/libs/ChkErr.php";

require_once "../app/config/Base.php";


# Auto Load Config 

spl_autoload_register(function($classname){
    require_once "../app/libs/" .$classname. ".php";
});