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
   $itemIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array ();

   $allCategories = getAllCategories();
   if (count($itemIds) !== 0){
    $recProducts = getProductsFromArray($itemIds);
   } else {
    $recProducts = null;
   }

   $smarty->assign('pageTitle', 'Корзина');
   $smarty->assign('allCategories', $allCategories);
   $smarty->assign('recProducts', $recProducts);


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

// Формирование страницы заказа

function orderAction($smarty){

if(!isset($_SESSION['user'])) {
    http_redirect('/?controller=cart&');
    return;
}

    $itemIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null; // получаем массив id

    if (!$itemIds){
        http_redirect('/?controller=cart&'); // если нет товаров
        return;
    }
    $itemsCnt = array ();
    foreach ($itemIds as $item) {
        // формируем ключ для массива POST
        $postVar = 'itemCnt_' . $item; 
        // $itemsCnt[3] = 2; товар с ID = 3 лежит в кол-ве 2 шт;
        $itemsCnt[$item] = isset($_POST[$postVar]) ? $_POST[$postVar] : null;
        // отладка
        // http://localhost/?controller=cart?action=order
        // echo $postVar . ' ' . $itemsCnt[$item] . '<br>';
    }
// список продуктов из массива корзины
    $recProducts = getProductsFromArray($itemIds);
    // отладка
    // echo $recProducts[0]['name_ru'];

    $i = 0;

    foreach ($recProducts as &$item) {
        // отладка
        // echo "itemsCnt[item[id]] = " . $itemsCnt[$item['id']] . "<br>";
        $item['cnt'] = isset($itemsCnt[$item['id']]) ? $itemsCnt[$item['id']] : 0;
        if ($item['cnt']) {
            $item['realPrice'] = $item['cnt'] * $item['price'];
            // echo "item[realPrice] =" . $item['cnt'] . '*' . $item['price'] . '=' . $item['realPrice'];
        } else {
            // если вдруг в корзине есть товар с кол-вом 0 - удаляем его из заказа

        unset ($recProducts[$i]);
        }
        $i++;
    }
    if(!$recProducts) {
        echo "Корзина пуста";
        return;
    }

    // отправляем итоговый массив в сессию

    $_SESSION['orderFromCart'] = $recProducts;

    $allCategories = getAllCategories();
    $smarty->assign('pageTitle', 'Заказ');
    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('recProducts', $recProducts);

    loadTemplate($smarty, 'order');


}