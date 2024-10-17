<?php

/**
 * loadPage - формирование запрашиваемой страницы
 *
 * @param  mixed $controllerName - название контроллера
 * @param  mixed $actionName - название функции обработки страницы внутри контроллера
 * @return void
 */
function loadPage($smarty, $controllerName, $actionName = 'index')
{
    include_once PATHPREFIX . $controllerName . PATHPOSTFIX;

    $function = $actionName . 'Action';
    $function($smarty);
}

function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TMPLTPOSTFIX);
}