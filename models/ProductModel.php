<?php

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