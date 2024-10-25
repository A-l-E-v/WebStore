<?php
/* Smarty version 5.4.1, created on 2024-10-24 05:10:20
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6719d6bc97e8b7_70325696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91df01203ffa18c4442577c3064e29e072150182' => 
    array (
      0 => 'index.tpl',
      1 => 1729746451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../includes/head.tpl' => 1,
    'file:../includes/header.tpl' => 1,
    'file:../includes/sidebarMenu.tpl' => 1,
    'file:../includes/productCard.tpl' => 1,
    'file:../includes/footer.tpl' => 1,
  ),
))) {
function content_6719d6bc97e8b7_70325696 (\Smarty\Template $_smarty_tpl) {
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
            <h5>Последние поступления</h5>
            <?php $_smarty_tpl->renderSubTemplate('file:../includes/productCard.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        </div>
    </div>
    <?php $_smarty_tpl->renderSubTemplate("file:../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

</body>

<!-- <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
> -->

</html><?php }
}
