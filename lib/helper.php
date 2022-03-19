<?php

function dump($el, $status = true)
{
    echo '<pre>';
    var_dump($el);
    echo '</pre>';

    if ($status) exit();
}