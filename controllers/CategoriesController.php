<?php

// Контроллер страниц категорий

include_once 'models/CategoriesModel.php';
include_once 'models/ProductModel.php';

/**
 * Метод формирования страниц подкатегорий
 *
 * @param  mixed $smarty
 * 
 */
function indexAction ($smarty) {
    $childCategoryId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($childCategoryId == null) exit ();


    $allCategories = getAllCategories();

    // Получение информации о подкатегориях
    $recCategory = getCategoriesById($childCategoryId);

    // Получение информации о продуктах в подкатегории
    $recProducts = getProductsByCategory($childCategoryId);

    $smarty->assign('pageTitle', $recCategory['name_ru']);
    $smarty->assign('allCategories', $allCategories);

    // Текущая категория
    $smarty->assign('recCategory', $recCategory);
    $smarty->assign('recProducts', $recProducts);

    loadTemplate($smarty, 'category');
}