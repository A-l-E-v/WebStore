<?php

/**
 * Получение списка товаров для главной страницы
 *
 * @param  mixed $limit - ограничение по кол-ву товаров
 * @return void
 */
function getLastProducts($limit = null){

    $sql = 'SELECT * FROM Products ORDER BY id DESC';
    $link = createConnectionDB();

    if ($limit) {
        $sql = $sql . ' LIMIT ' . $limit;
    }

    $result = mysqli_query($link, $sql);

    if ($result === false) {
        echo 'Ошибка: ' . mysqli_error($link);
    }
    
    return createSmartyRecArr($result);
}

/**
 * Получение списка товаров для страницы подкатегории
 *
 * @param  mixed $id - идентификатор категории
 * @return void
 */
function getProductsByCategory ($id){

    $itemId = intval ($id);
    $sql = 'SELECT * FROM Products WHERE category_id = ' . $itemId;
    $link = createConnectionDB();
    $result = mysqli_query($link, $sql);

    // if ($result === false) {
    //     echo "Ошибка: " . mysqli_error($link);
    // }

    return createSmartyRecArr($result);

}

/**
 * Получение информации о конкретном товаре
 *
 * @param  mixed $id товара
 * @return void
 */
function getProductById($id)  {
    
    $itemId = intval ($id);
    $sql = 'SELECT * FROM Products WHERE id = ' . $itemId;
    $link = createConnectionDB();
    $result = mysqli_query($link, $sql);

    // if ($result === false) {
    //     echo "Ошибка: " . mysqli_error($link);
    // }

    return mysqli_fetch_assoc($result);

}