<?php
/* Smarty version 5.4.1, created on 2024-10-23 16:25:53
  from 'file:authorization.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67192391e53c00_20932880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a0bb3fc16dae63d6b96ad0a3aaa6b8a2f2f47ad' => 
    array (
      0 => 'authorization.tpl',
      1 => 1729700748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../includes/head.tpl' => 1,
    'file:../includes/header.tpl' => 1,
    'file:../includes/sidebarMenu.tpl' => 1,
  ),
))) {
function content_67192391e53c00_20932880 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/WebStore/views/default';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Регистрация</title>
    <?php $_smarty_tpl->renderSubTemplate("file:../includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

</head>

<body>


    <?php $_smarty_tpl->renderSubTemplate("file:../includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="wrapper">
        <?php $_smarty_tpl->renderSubTemplate("file:../includes/sidebarMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <!-- класс для ajax-формы -->
        <div class='form' id='auth'>

            <section>
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="card text-black" style="background-color: #ccc; border-radius: 25px;">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <p class="text-center h1 fw-bold ">Авторизация</p>
                                    <form class="mx-1 mx-md-4" method="post">
                                        

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="email" id="emailLogin" name="emailLogin" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="emailLogin">Ваш Email*</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="pwdLogin" name="pwdLogin" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="pwdLogin">Пароль*</label>
                                            </div>
                                        </div>

                                    
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="/" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Назад</a>
                                            <button type="button" onclick="loginUser();" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="margin-left: 15px;">Войти</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

<?php echo '<script'; ?>
 src = 'www/js/jquery-3.7.1.js' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src = 'www/js/auth.js' type='text/javascript'><?php echo '</script'; ?>
>

</body>

</html><?php }
}
