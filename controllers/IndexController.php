<?php

/**
 * Контроллер главной страницы
 */

include_once 'models/CategoriesModel.php';
include_once 'models/ProductModel.php';

/**
 * Метод формирования категорий для главной страницы
 *
 * @param  mixed $smarty
 * @return void
 */
function indexAction($smarty)  {
    $allCategories = getAllCategories();
    $lastProducts = getLastProducts(LASTPRODUCTS);

    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('recCategory', null);

    $smarty->assign('recProducts', $lastProducts);    

    $smarty->assign('pageTitle', 'Главная');
    loadTemplate($smarty, 'index');
}