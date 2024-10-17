<?php

/**
 * Контроллер главной страницы
 */


function indexAction($smarty)  {
    $smarty->assign('pageTitle', 'Главная');
    loadTemplate($smarty, 'index');
}