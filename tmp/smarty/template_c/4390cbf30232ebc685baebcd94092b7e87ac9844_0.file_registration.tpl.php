<?php
/* Smarty version 5.4.1, created on 2024-10-24 05:10:44
  from 'file:registration.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6719d6d461f547_29260702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4390cbf30232ebc685baebcd94092b7e87ac9844' => 
    array (
      0 => 'registration.tpl',
      1 => 1729746607,
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
function content_6719d6d461f547_29260702 (\Smarty\Template $_smarty_tpl) {
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
        <div class='form' id='reg'>

            <section>
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="card text-black" style="background-color: #ccc; border-radius: 25px;">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <p class="text-center h1 fw-bold ">Регистрация</p>
                                    <form class="mx-1 mx-md-4" method="post">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="name" name="name" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="name">Ваше имя (по желанию)</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" name="email" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="email">Ваш Email*</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="pwd1" name="pwd1" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="pwd1">Пароль*</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="pwd2" name="pwd2" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="pwd2">Повторите пароль*</label>
                                            </div>
                                        </div>



                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="/" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Назад</a>
                                            <button type="button" onclick="registerNewUser();" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="margin-left: 15px;">Зарегистрироваться</button>
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

<!-- <?php echo '<script'; ?>
 src = 'www/js/jquery-3.7.1.js' type='text/javascript'><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src = 'www/js/register.js' type='text/javascript'><?php echo '</script'; ?>
>

</body>

</html><?php }
}
