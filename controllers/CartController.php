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

function addtocartAction(){
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) return false;

    $resData = array();

    if(isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    }
    else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}

function removefromcartAction(){
    $itemId = isset ($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) exit ();

    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !== false){
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}