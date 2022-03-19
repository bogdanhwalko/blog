<?php

//Функция будет принимать название контролера, екшена а также некоторые данные (array)$data
function render($controller, $action, $data)
{
    if (is_array($data)) {
        extract($data);
    }

    //Подключаем наш общий вид
    include_once 'views/layout.php';
}