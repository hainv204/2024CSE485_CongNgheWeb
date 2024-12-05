<?php
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

$controllerClass = ucfirst($controller) . 'Controller';
$controllerFile = "controllers/$controllerClass.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerObj = new $controllerClass();
    if (method_exists($controllerObj, $action)) {
        $controllerObj->$action();
    } else {
        echo "Action không tồn tại.";
    }
} else {
    echo "Controller không tồn tại.";
}
