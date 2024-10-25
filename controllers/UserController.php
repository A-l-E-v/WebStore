<?php

// Контроллер функций пользователя

include_once 'models/CategoriesModel.php';
include_once 'models/UsersModel.php';

// Профиль пользователя
function indexAction($smarty)
{
    $allCategories = getAllCategories();

    $smarty->assign('pageTitle', 'Профиль');
    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('recCategory', null);


    loadTemplate($smarty, 'profile');
}



// Регистрация пользователя
function templateregAction($smarty)
{

    loadTemplate($smarty, 'registration');
}

// Аутентификация пользователя
function templateauthAction($smarty)
{

    loadTemplate($smarty, 'authorization');
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

function logoutAction()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
    }
    http_redirect('/');
}

function loginAction()
{

    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);


    $pwd = isset($_REQUEST['pwd']) ? $_REQUEST['pwd'] : null;
    $pwd = trim($pwd);

    $userData = loginUser($email, $pwd);

    if ($userData['success']) {
        $userData = $userData[0];

        $_SESSION['user'] = $userData;
        $_SESSION['user']['displayName'] = $userData['name'] ?: $userData['email'];

        $resData['userName'] = $_SESSION['user'];
        $resData['success'] = 1;

        $resData['message'] = 'Удачный вход!';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Неверный email или пароль';
    }

    echo json_encode($resData);
}

// Обновление данных пользователя

function updateAction()
{
    if (!isset($_SESSION['user'])) {
        http_redirect('/');
    }

    $resData = array();

    // заменить REQUEST на POST при генерации ЧПУ
    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $address = isset($_REQUEST['address']) ? $_REQUEST['address'] : null;
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;
    $curPwd = isset($_REQUEST['curPwd']) ? $_REQUEST['curPwd'] : null;

    if (!$curPwd || !(password_verify($curPwd, $_SESSION['user']['pwd']))) {
        $resData['success'] = 0;
        $resData['message'] = "Неверный пароль";
        echo json_encode($resData);
        return false;
    }

    $res = updateUserData($name, $phone, $address, $pwd1, $pwd2);
    if ($res){
        // var_dump($res);
        $resData['success'] = 1;
        $resData['message'] = "Данные сохранены";
        $resData['userName'] = $name;

        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['phone'] = $phone;
        $_SESSION['user']['address'] = $address;

        $newPwd = $_SESSION['user']['pwd'];
        if ($pwd1 && ($pwd1 == $pwd2)) {
            $newPwd = password_hash(trim($pwd1), PASSWORD_BCRYPT);
        }
        $_SESSION['user']['pwd'] = $newPwd;

        $_SESSION['user']['displayName'] = $name ?: $_SESSION['user']['email'];

    } else {
        $resData['success'] = 0;
        $resData['message'] = "Ошибка сохранения данных";
    }
echo json_encode($resData);
}
