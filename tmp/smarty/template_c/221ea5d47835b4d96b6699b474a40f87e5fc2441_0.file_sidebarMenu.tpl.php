<?php
/* Smarty version 5.4.1, created on 2024-10-18 02:12:01
  from 'file:/var/www/html/WebStore/views/default/../includes/sidebarMenu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6711c3f10483f5_29871821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '221ea5d47835b4d96b6699b474a40f87e5fc2441' => 
    array (
      0 => '/var/www/html/WebStore/views/default/../includes/sidebarMenu.tpl',
      1 => 1729217516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6711c3f10483f5_29871821 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/WebStore/views/includes';
?><div class="flex-shrink-0 p-3" style="width: 280px;">
  <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
    <svg class="bi pe-none me-2" width="30" height="24">
      <use xlink:href="#bootstrap"></use>
    </svg>
    <span class="fs-5 fw-semibold">Категории</span>
  </a>
  <ul class="list-unstyled ps-0">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('arrCategories'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
    <li class="mb-1">
      <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
        <?php echo $_smarty_tpl->getValue('item')['name_ru'];?>

      </button>
      <div class="collapse" id="home-collapse" style="">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
          <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a></li>
          <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li>
        </ul>
      </div>
    </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </ul>
</div><?php }
}
