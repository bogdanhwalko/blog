<?php

include_once 'lib/viewLib.php';

//Присвоим значения по умолчанию
$controller = 'main';
$action = 'index';


//Если в $_GET['c'] не пустое значение запишем в переменную $controller
if (! empty($_GET['c'])) {
    $controller = $_GET['c'];
}

//Если в $_GET['c'] не пустое значение запишем в переменную $action
if (! empty($_GET['a'])) {
    $action = $_GET['a'];
}

//Сформируем путь к нашему контролеру
$controllerPath = "controllers/{$controller}Controller.php";
//Сформируем название вызываемой функции
$functionName = $controller . '_' . $action;

//Если такой контролер существует подключим его инклудом
if (file_exists($controllerPath)) {
    include_once $controllerPath;

    //Если такая функция существует вызовем её
    if (function_exists($functionName)) {
        $data = $functionName();
        render($controller, $action, $data);
    }
}
