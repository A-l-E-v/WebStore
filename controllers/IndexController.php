<?php

/**
 * Контроллер главной страницы
 */

include_once 'models/CategoriesModel.php';

function indexAction($smarty)  {
    $allCategories = getAllCategories();
    $lastProducts = getLastProducts(LASTPRODUCTS);
    
    $smarty->assign('allCategories', $allCategories);    
    $smarty->assign('pageTitle', 'Главная');
    loadTemplate($smarty, 'index');
}