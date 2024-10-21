<?php

// Контроллер страницы корзины

include_once 'models/CategoriesModel.php';
include_once 'models/ProductModel.php';

/**
 * Метод формирования страницы корзины
 *
 * @param  mixed $smarty
 * 
 */
function indexAction ($smarty) {
   

    loadTemplate($smarty, 'cart');
}