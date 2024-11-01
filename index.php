<?php

// корзина сохраняется в рамках сессии
session_start();

// создаём корзину, если её нет в сессии

if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

include_once 'config/config.php';
include_once 'library/mainFunctions.php';

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

if (isset($_SESSION['user'])){
    $smarty->assign('arrUser', $_SESSION['user']);
}

$smarty->assign('cartCntItems', count($_SESSION['cart']));


loadPage($smarty, $controllerName, $actionName);
