<?php

/**
 * Контроллер главной страницы
 */

include_once 'models/CategoriesModel.php';
include_once 'models/ProductModel.php';

function indexAction($smarty)  {
    $allCategories = getAllCategories();
    $lastProducts = getLastProducts(LASTPRODUCTS);

    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('lastProducts', $lastProducts);    

    $smarty->assign('pageTitle', 'Главная');
    loadTemplate($smarty, 'index');
}