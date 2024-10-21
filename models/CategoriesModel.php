<?php

// Модель категорий для меню


/**
 * Создание подключения
 *
 * return $connection | $err string
 */
function createConnectionDB()
{

    // попытка подключения к БД
    try {
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    } catch (mysqli_sql_exception $e) {
        $err = ("Невозможно подключиться к БД. Ошибка: " . mysqli_connect_error() . "<br>");
        exit($err);
    }
    // print_r("Успешное подключение к БД!<br>");
    // попытка установки кодировки
    try {
        mysqli_set_charset($connection, "utf8");
    } catch (mysqli_sql_exception $e) {

        $err = ("Ошибка установки кодировки БД. Ошибка: " . mysqli_error($connection) . "<br>");
        exit($err);
    }
    // print_r("Кодировка БД установлена: " . mysqli_character_set_name($connection) . "<br>");
    return $connection;
}

/**
 * Получение всех категорий товаров
 *
 * return $smartyArray | $err string
 */

function getAllCategories()
{
    $sql = 'SELECT * FROM Categories WHERE parent_id = 0';
    $connection = createConnectionDB();

    $smartyArray = array();

    try {
        $result = mysqli_query($connection, $sql);
    } catch (mysqli_sql_exception $e) {
        $err = ("Ошибка запроса к БД. Ошибка: " . mysqli_error($connection) . "<br>");
        exit($err);
    }

    // print_r("Запрос к БД успешный!<br>");

    // $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // вывод информации
    while ($row = mysqli_fetch_array($result)) {
        // echo ('<br>Уровень: ' . $row['id']) . ";<br>Родитель: " . $row['parent_id'] .
        //     '<br> Имя категории: ' . $row['name_ru'] . '<br> Category name: ' . $row['name_en'];
        $recChildren = getChildren($row['id']);
        // var_dump($recChildren);
        if ($recChildren) {
            $row['children'] = $recChildren;
        }

        $smartyArray[] = $row;
    }
    return $smartyArray;
}

function getChildren($recID)
{
    $sql = 'SELECT * FROM Categories WHERE parent_id =' . $recID;
    $connection = createConnectionDB();

    $result = mysqli_query($connection, $sql);

    // foreach ($rows as $row) {
    //     echo($row['name_ru']);    }

    return createSmartyRecArr($result);
}

function getCategoriesById($id) {
    $categoryId = intval ($id);
    $sql = 'SELECT * FROM Categories WHERE id = ' . $categoryId;
    $link = createConnectionDB();
    $result = mysqli_query($link, $sql);

    // if ($result === false) {
    //     echo "Ошибка: " . mysqli_error($link);
    // }

    return mysqli_fetch_assoc($result);
}