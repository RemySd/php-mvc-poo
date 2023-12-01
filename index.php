<?php

require './vendor/autoload.php';

include_once './templates/header.php';

define('BASE_PATH', __DIR__);
require BASE_PATH . '/config/config.php';

$controller = 'home';
$action = 'getHome';

if (APP_MODE === 'dev') {
    function displayError($e)
    {
        echo $e;
    }
}

if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
}

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

try {
    $type = 'App\\Controllers\\' . ucfirst($controller) . 'Controller';
    $controller = new $type();
    $controller->$action();
} catch (\Exception $e) {
    include_once BASE_PATH . '/templates/error404.php';

    if (APP_MODE === 'dev') {
        displayError($e);
    }
} catch (Throwable $e) {
    include_once BASE_PATH . '/templates/error404.php';

    if (APP_MODE === 'dev') {
        displayError($e);
    }
}

include_once './templates/footer.php';
