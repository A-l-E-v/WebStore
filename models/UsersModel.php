<?php

// Модель для таблицы пользователей

/**
 * registerNewUser
 *
 * @param  mixed $email
 * @param  mixed $pwdHash
 * @param  mixed $name
 * @param  mixed $phone
 * @param  mixed $address
 * @return void
 */
function registerNewUser($email, $pwdHash, $name, $phone, $address)
{
    $email = htmlspecialchars($email);
    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $address = htmlspecialchars($address);

    $sql = "INSERT INTO Users (`email`, `pwd`, `name`, `phone`, `address`) VALUES ('{$email}', '{$pwdHash}', '{$name}', '{$phone}', '{$address}')";
    $link = createConnectionDB();

    try {
    $result = mysqli_query($link, $sql);



    } catch(Exception $e)
    {

        $result['success'] = 0;
    }

    if ($result) {
        $sql = "SELECT * FROM Users WHERE (`email`='{$email}' and `pwd`='{$pwdHash}' ) LIMIT 1";

        try {
            $result = mysqli_query($link, $sql);
          
            $result = createSmartyRecArr($result);
            $result['success'] = 1;
          

        }
        catch(Exception $e)
        {
    
            $result['success'] = 0;
        }
    } 


    return $result;
}

/**
 * checkRegisterParams
 *
 */
function checkRegisterParams($email, $pwd1, $pwd2)
{

    $result = null;

    if (!$email) {
        $result['success'] = null;
        $result['message'] = 'Введите email';
    }

    if (!$pwd1) {
        $result['success'] = null;
        $result['message'] = 'Введите пароль';
    }

    if (!$pwd2) {
        $result['success'] = null;
        $result['message'] = 'Повторите пароль';
    }

    if ($pwd1 != $pwd2) {
        $result['success'] = null;
        $result['message'] = 'Пароли не совпадают';
    }

    return $result;
}

/**
 * checkUserEmail - проверка уникальности email пользователя
 *
 * @param  mixed $email
 * @return строка из таблицы Users|пустой массив
 */
function checkUserEmail($email)
{
    $email = htmlspecialchars($email);
    $sql = "SELECT id FROM Users WHERE email='" . $email . "'";
    $link = createConnectionDB();
    $result = mysqli_query($link, $sql);
  

    return createSmartyRecArr($result);
}



function loginUser($email, $pwd)
{
    $email = htmlspecialchars($email);
    $sql = "SELECT * FROM Users WHERE `email` = '{$email}' LIMIT 1";
    $link = createConnectionDB();

    try {
    $result = mysqli_query($link, $sql);

    } catch(Exception $e)
    {

        $result['success'] = 0;
    }
    $result = createSmartyRecArr($result);

    if ((isset($result[0]))&& (password_verify($pwd, $result[0]['pwd']))) {
       $result['success'] = 1;
    } else {
        $result['success'] = 0;
    }


    return $result;
}

function updateUserData ($name, $phone, $address, $pwd1, $pwd2) {
    // email берём из сессии!!!
    $email = htmlspecialchars($_SESSION['user']['email']);
    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $address = htmlspecialchars($address);
    $pwd1 = trim($pwd1);
    $pwd2 = trim($pwd2);

    $newPwd = null;

    if ($pwd1 && ($pwd1 == $pwd2)) {
        $newPwd = password_hash($pwd1, PASSWORD_BCRYPT);
    }
$sql = "UPDATE Users SET";

if ($newPwd) {
    $sql .= "`pwd` = '{$newPwd}', ";
    }
$sql .= "`name` = '{$name}', `email` = '{$email}', `phone` = '{$phone}', `address` = '{$address}', ";
$sql .= "WHERE `email` = '{$email}' LIMIT 1";
$link = createConnectionDB();

try{
    $result = mysqli_query($link, $sql);
    $result['success'] = 1;



} catch(Exception $e)
{

    $result['success'] = 0;
}



return $result;
}