<?php

// Контроллер страниц категорий

include_once 'models/CategoriesModel.php';
include_once 'models/ProductModel.php';

function indexAction ($smarty) {
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($itemId == null) exit ();

    $allCategories = getAllCategories();

    // Получение данных продукта
    $recProduct = getProductById($itemId);
    $recCategory = getCategoriesById($recProduct['category_id']);

    $smarty->assign('pageTitle', $recProduct['name_ru']);
    $smarty->assign('allCategories', $allCategories);

    // Текущая категория
    $smarty->assign('recCategory', $recCategory);
    $smarty->assign('recProduct', $recProduct);

    loadTemplate($smarty, 'product');

}
