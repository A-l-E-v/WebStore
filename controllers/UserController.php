<?php

// Контроллер функций пользователя

include_once 'models/CategoriesModel.php';
include_once 'models/UsersModel.php';

function indexAction($smarty)
{

    loadTemplate($smarty, 'registration');
}

/**
 * registerAction AJAX регистрация
 * Инициализация сессионной переменной ($_SESSION['user'])
 *
 * @return json-массив данных нового пользователя
 */
function registerAction()
{

    // echo("<br><br>132registerAction beginning<br><br>");

    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);


    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $address = isset($_REQUEST['address']) ? $_REQUEST['address'] : null;
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $name = trim($name);

    $resData = null;
    
    $resData = checkRegisterParams($email, $pwd1, $pwd2);

    if (!$resData && checkUserEmail($email)) {
        // echo("<br><br>Пользователь с email '{$email}' уже зарегистрирован.<br><br>");

        $result['success'] = 0;
        $result['message'] = "Пользователь с email '{$email}' уже зарегистрирован.";
    }

    if (!$resData) {

        // echo("<br><br>!$resData<br><br>");

        $pwHash = password_hash($pwd1, PASSWORD_BCRYPT);

        $userData = registerNewUser($email, $pwHash, $name, $phone, $address);

        if ($userData['success']) {
            // echo("<br><br>userDatauccess<br><br>");

            $resData['message'] = 'Пользователь успешно зарегистрирован';
            $resData['success'] = 1;

            $userData = $userData[0];
            $resData['userName'] = $userData['name'] ?: $userData['email'];
            $resData['userEmail'] = $email;

            $_SESSION['user'] = $userData;
            $_SESSION['user']['displayName'] = $userData['name'] ?: $userData['email'];
        } else {
            // echo("<br><br>ELSEuserDatasuccess<br><br>");

            $resData['success'] = 0;
            $resData['message'] = "Ошибка регистрации";
        }
    }
    // echo("<br><br>132registerAction ending <br><br>");

    // echo ('<br>!!!!!!!!!!<br>$resData in registerAction<br>!!!!!!<br>');
    // var_dump($resData);
    echo json_encode($resData);
}

function logoutAction(){
    if (isset($_SESSION['user'])){
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
    }
    http_redirect('/');
}