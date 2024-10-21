<?php
/* Smarty version 5.4.1, created on 2024-10-21 04:25:21
  from 'file:/var/www/html/WebStore/views/default/../includes/productCard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6715d7b1b5c429_65557599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '211be950a735b0b5e0f3e1b96a293568b3c6b08f' => 
    array (
      0 => '/var/www/html/WebStore/views/default/../includes/productCard.tpl',
      1 => 1729484609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6715d7b1b5c429_65557599 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/WebStore/views/includes';
?>

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
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
