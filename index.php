<?php

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

$params = explode('/', $_GET['p']);
var_dump($params);

if ($params[0] !="") {
    $controller = ucfirst($params[0]);
    
    $action = isset($params[1]) ? $params[1] : 'index';

    require_once (ROOT.'controller/'.$controller.'.php');

    $controller = new $controller();

    if (method_exists($controller, $action)) {
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller, $action], $params);
    }
    else{
        http_response_code(404);
        echo 'Page introuvable';
    }
}
else{
    require_once (ROOT.'controller/Accueil.php');
    $controller = new Accueil;
    $controller->index();
    include 'view/base.php';
}

