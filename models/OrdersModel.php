<?php
// Модель для таблицы заказов

// создание заказа

function makeNewOrder($name, $phone, $address) {
    $userId = $_SESSION['user']['id'];
    $comment = "id пользователя: {$userId}<br />
                Имя: {$name}<br />
                Тел: {$phone}<br />
                Адрес: {$address}<br />";
    $dateCreated = date ('Y.m.d H:i:s');
    $userIp = $_SERVER['REMOTE_ADDR'];

    $sql = "INSERT INTO Orders (`user_id`, `date_created`,
    `date_payment`, `status`, `comment`, `user_ip`)
    VALUES ('{$userId}', '{$dateCreated}', null, 0, '{$comment}', '{$userIp}')";

    $link = createConnectionDB();
    $result = mysqli_query($link, $sql);

    // получаем ID созданной записи

    if ($result) {
        $sql = "SELECT `id` FROM Orders ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($link, $sql);
        $result = createSmartyRecArr($result);
    
        if (isset($result[0])) {
            return $result[0]['id'];
        }
    }

    return false;
}