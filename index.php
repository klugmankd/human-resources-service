<?php

include_once ("app/Resources/router.php");
include_once ("app/front-end/header.php");

$route = ($_GET['route'] == '') ? 'index' : $_GET['route'];

if (count($routes[$route]) > 0) {
    $url[0] = $routes[$route]['controller'];
    $url[1] = $routes[$route]['action'];
} else if (isset($route)) {
    $url = $route;
    $url = rtrim($url, '/');
    $url = explode('/', $url);
}
require 'src/controller/' . $url[0] . '.php';

$controller = new $url[0];

if (isset($url[2])) {
    $controller->$url[1]($url[2]);
} else {
    if (isset($url[1])) {
        $controller->$url[1]();
    }
}

include_once ("app/front-end/footer.php");