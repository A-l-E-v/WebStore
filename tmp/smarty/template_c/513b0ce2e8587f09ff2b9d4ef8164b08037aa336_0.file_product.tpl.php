<?php
/* Smarty version 5.4.1, created on 2024-10-24 05:54:03
  from 'file:product.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6719e0fbcaa1a4_99004090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '513b0ce2e8587f09ff2b9d4ef8164b08037aa336' => 
    array (
      0 => 'product.tpl',
      1 => 1729746461,
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
function content_6719e0fbcaa1a4_99004090 (\Smarty\Template $_smarty_tpl) {
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
      <div class="card mb-3" style="max-width: 90%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="www/img/products/<?php echo $_smarty_tpl->getValue('recProduct')['image'];?>
"
              class="img-fluid rounded-start"
              alt="<?php echo $_smarty_tpl->getValue('recProduct')['name_ru'];?>
">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $_smarty_tpl->getValue('recProduct')['name_ru'];?>
</h5>
              <p class="card-text"><?php echo $_smarty_tpl->getValue('recProduct')['description'];?>
</p>
              <p class="card-text">
                <medium class="text-body-secondary">Цена: <?php echo $_smarty_tpl->getValue('recProduct')['price'];?>
 руб.</medium>
              </p>
              <a id="addCart_<?php echo $_smarty_tpl->getValue('recProduct')['id'];?>
" <?php if ($_smarty_tpl->getValue('itemInCart')) {?>style = "display: none"<?php }?> onClick="addToCart(<?php echo $_smarty_tpl->getValue('recProduct')['id'];?>
); return false;" class="btn btn-primary order" href="#">В корзину</a>
              <a id="removeFromCart_<?php echo $_smarty_tpl->getValue('recProduct')['id'];?>
" <?php if (!$_smarty_tpl->getValue('itemInCart')) {?>style="display: none"<?php }?> onClick="removeFromCart(<?php echo $_smarty_tpl->getValue('recProduct')['id'];?>
); return false;" class='btn btn-primary order' href="#">Удалить</a>
            </div>

          </div>

        </div>
      </div>
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
