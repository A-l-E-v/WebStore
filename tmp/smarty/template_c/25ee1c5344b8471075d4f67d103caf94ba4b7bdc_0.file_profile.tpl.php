<?php
/* Smarty version 5.4.1, created on 2024-10-25 05:56:35
  from 'file:profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671b3313d9aa07_15586007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25ee1c5344b8471075d4f67d103caf94ba4b7bdc' => 
    array (
      0 => 'profile.tpl',
      1 => 1729835791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../includes/head.tpl' => 1,
    'file:../includes/header.tpl' => 1,
    'file:../includes/sidebarMenu.tpl' => 1,
    'file:../includes/footer.tpl' => 1,
  ),
))) {
function content_671b3313d9aa07_15586007 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/WebStore/views/default';
?><!DOCTYPE html>
<html lang="en">

<head>
    <?php $_smarty_tpl->renderSubTemplate("file:../includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


</head>

<body>


    <?php $_smarty_tpl->renderSubTemplate("file:../includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="wrapper">
        <?php $_smarty_tpl->renderSubTemplate("file:../includes/sidebarMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <div id='content'>
            <h5>Ваш профиль пользователя</h5>
            <div class='form' id='profile'>

                <section>
                    <div class="container">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="card text-black" style="background-color: #ccc; border-radius: 25px;">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <p class="text-center h1 fw-bold ">Ваш профиль пользователя</p>
                                        <form class="mx-1 mx-md-4" method="post">
                                            <p class="font-weight-bold">Ваш email: <?php echo $_smarty_tpl->getValue('arrUser')['email'];?>
</p>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                    <input type="text" id="name" name="name"
                                                    <?php echo $_smarty_tpl->getValue('arrUser')['displayName'];?>

                                                        class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                    <label class="form-label" for="name">Ваше имя</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                    <input type="text" id="phone" name="phone"


                                                        <?php if ($_smarty_tpl->getValue('arrUser')['phone']) {?>
                                                        <?php $_smarty_tpl->assign('var', ((string)$_smarty_tpl->getValue('arrUser')['phone']), false, NULL);?>
                                                        <?php } else { ?>
                                                        <?php $_smarty_tpl->assign('var', '', false, NULL);?>
                                                        <?php }?>

                                                        class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                    <label class="form-label" for="phone">Телефон</label>
                                                </div>
                                            </div>



                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                    <input type="text" id="address" name="address"

                                                        <?php if ($_smarty_tpl->getValue('arrUser')['address']) {?>
                                                        <?php $_smarty_tpl->assign('var', ((string)$_smarty_tpl->getValue('arrUser')['address']), false, NULL);?>
                                                        <?php } else { ?>
                                                        <?php $_smarty_tpl->assign('var', '', false, NULL);?>
                                                        <?php }?>

                                                        class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                    <label class="form-label" for="address">Адрес</label>
                                                </div>
                                            </div>


                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                    <input type="password" id="newpwd1" name="newpwd1" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                    <label class="form-label" for="newpwd1">Новый пароль*</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                    <input type="password" id="newpwd2" name="newpwd2" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                    <label class="form-label" for="newpwd2">Повторите пароль*</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                    <input type="password" id="curPwd" name="curPwd" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                    <label class="form-label" for="curPwd">Текущий пароль</label>
                                                </div>
                                            </div>



                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <a href="/" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Назад</a>
                                                <button type="button" onclick="updateUserData();" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="margin-left: 15px;">Сохранить</button>
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
    </div>
    <?php $_smarty_tpl->renderSubTemplate("file:../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

</body>


<!-- <?php echo '<script'; ?>
 src = 'www/js/jquery-3.7.1.js' type='text/javascript'><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src='www/js/profile.js' type='text/javascript'><?php echo '</script'; ?>
>

</html><?php }
}
