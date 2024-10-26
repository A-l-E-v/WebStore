<?php

// Модель для таблицы состава заказа Purchase

function setPurchaseForOrder ($orderId, $cart) {

    $sql = "INSERT INTO Purchase (`order_id`, `product_id`, `price`, `amount`) VALUES ";

    // массив строк для запроса по каждому товару

    $values = array();

    foreach ($cart as $item) {
        $values[] = "('{$orderId}', '{$item['id']}', '{$item['price']}', '{$item['cnt']}')";
    }

    // массив -> строка

    $sql .= implode(', ', $values);
    $link = createConnectionDB();

    $result = mysqli_query($link, $sql);

    return $result;
}