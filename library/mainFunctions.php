<?php

/**
 * loadPage - формирование запрашиваемой страницы
 *
 * @param  mixed $controllerName - название контроллера
 * @param  mixed $actionName - название функции обработки страницы внутри контроллера
 * @return void
 */
function loadPage($controllerName, $actionName)
{
    include_once PATHPREFIX . $controllerName . PATHPOSTFIX;

    $function = $actionName . 'Action';
    $function();
}