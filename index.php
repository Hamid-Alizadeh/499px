<?php

define('SITENAME', '499 PX');

require_once './app/require.php';

$controllerReq = isset($_GET['c']) ? $_GET['c'] : 'Home';
$actionReq = isset($_GET['a']) ? $_GET['a'] : 'index';

$controllerName = ucfirst($controllerReq) . 'Controller';
$controllerFile = './app/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {

    include $controllerFile;

    $controller = new $controllerName();

    if (method_exists($controller, $actionReq)) {
        $controller->$actionReq();
    } else {
        $controller->index();
    }
} else {

    include './app/controllers/HomeController.php';

    $controller = new HomeController();
    $controller->index();
}
