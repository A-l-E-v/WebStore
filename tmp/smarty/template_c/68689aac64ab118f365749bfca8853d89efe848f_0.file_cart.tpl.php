<?php
/* Smarty version 5.4.1, created on 2024-10-26 05:43:19
  from 'file:cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671c817742bdf2_66304972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68689aac64ab118f365749bfca8853d89efe848f' => 
    array (
      0 => 'cart.tpl',
      1 => 1729921396,
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
function content_671c817742bdf2_66304972 (\Smarty\Template $_smarty_tpl) {
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
            <h5>Корзина покупок</h5>
            <?php if (!((null !== ($_smarty_tpl->getValue('arrUser') ?? null)))) {?>
            <h6>Для оформления заказа пройдите регистрацию или авторизуйтесь</h6>
            <?php }?>
            <?php if (!$_smarty_tpl->getValue('recProducts')) {?>
            <h8> Вы ещё ничего не добавили в Корзину</h8>
            <?php } else { ?>
            <form action="/?controller=cart&action=order" method="POST">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('recProducts'), 'item', false, NULL, 'products', array (
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2">
                                        <img src="www/img/products/<?php echo $_smarty_tpl->getValue('item')['image'];?>
" class="img-fluid rounded-3" alt="<?php echo $_smarty_tpl->getValue('item')['name_ru'];?>
">
                                    </div>
                                    <a href="/?controller=product&id=<?php echo $_smarty_tpl->getValue('item')['id'];?>
/" class="col-md-4 col-lg-4 col-xl-4 nav-link active" style="..."><?php echo $_smarty_tpl->getValue('item')['name_ru'];?>
</a>
                                    <div class="col-md-2 d-flex">
                                        <input name="itemCnt_<?php echo $_smarty_tpl->getValue('item')['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->getValue('item')['id'];?>
" type="text" value="1" onchange="conversPrice(<?php echo $_smarty_tpl->getValue('item')['id'];?>
, <?php echo $_smarty_tpl->getValue('item')['price'];?>
)" class="form-control" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col-md-2 offset-lg-1">
                                        <h9 id="itemRealPrice_<?php echo $_smarty_tpl->getValue('item')['id'];?>
" class="mb-0"><?php echo $_smarty_tpl->getValue('item')['price'];?>
 руб.</h9>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a id="removeFromCart_<?php echo $_smarty_tpl->getValue('item')['id'];?>
" href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->getValue('item')['id'];?>
); return false;" class="text-danger">
                                            <i class="fas">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                                </svg> </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <ul class="nav nav-pills order">
                            <li class="nav-items">
                                <a class="nav-link active" href="#">Оформить заказ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <?php }?>
    <?php $_smarty_tpl->renderSubTemplate("file:../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

</body>

<!-- <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
> -->

</html><?php }
}
