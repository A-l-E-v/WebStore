<?php
/* Smarty version 5.4.1, created on 2024-10-20 17:53:11
  from 'file:category.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6715438730d4f8_37028946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e9f0fe5524e56ca066fe97b914b530a75a0c6a' => 
    array (
      0 => 'category.tpl',
      1 => 1729445937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../includes/header.tpl' => 1,
    'file:../includes/sidebarMenu.tpl' => 1,
    'file:../includes/footer.tpl' => 1,
  ),
))) {
function content_6715438730d4f8_37028946 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/WebStore/views/default';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('templateWebPath');?>
css/main.css">


    <title><?php echo $_smarty_tpl->getValue('pageTitle');?>
</title>
</head>

<body>


    <?php $_smarty_tpl->renderSubTemplate("file:../includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="wrapper">
    <?php $_smarty_tpl->renderSubTemplate("file:../includes/sidebarMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <div id='content'>
            <h5>Товары категории <?php echo $_smarty_tpl->getValue('recCategory')['name_ru'];?>
</h5>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('recProducts'), 'prod');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('prod')->value) {
$foreach0DoElse = false;
?>
            <div class="card" style="width: 13rem;">
                <img class="card-img-top" src="www/img/products/<?php echo $_smarty_tpl->getValue('prod')['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('prod')['name_ru'];?>
">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->getValue('prod')['name_ru'];?>
</h5>
                    <h7 class='card-title'><?php echo $_smarty_tpl->getValue('prod')['price'];?>
 руб.</h7>
                    <!-- <p class="card-text"><?php echo $_smarty_tpl->getValue('prod')['description'];?>
</p> -->
                    <a href="/?controller=product&id=<?php echo $_smarty_tpl->getValue('prod')['id'];?>
/" class="btn btn-primary">Купить</a>
                </div>
            </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php $_smarty_tpl->renderSubTemplate("file:../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

</body>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

</html><?php }
}
