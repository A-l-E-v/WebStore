<?php

/**
 * loadPage
 *
 * @param  mixed $controllerName
 * @param  mixed $actionName
 * @return void
 */
function loadPage($controllerName, $actionName)
{
    include_once PATHPREFIX . $controllerName . PATHPOSTFIX;

    $function = $actionName . 'Action';
    $function();
}