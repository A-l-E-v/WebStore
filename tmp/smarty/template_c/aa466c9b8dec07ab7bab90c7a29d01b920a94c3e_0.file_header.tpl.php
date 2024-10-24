<?php
/* Smarty version 5.4.1, created on 2024-10-23 17:26:09
  from 'file:/var/www/html/WebStore/views/default/../includes/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671931b18a2958_08733109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa466c9b8dec07ab7bab90c7a29d01b920a94c3e' => 
    array (
      0 => '/var/www/html/WebStore/views/default/../includes/header.tpl',
      1 => 1729704364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671931b18a2958_08733109 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/WebStore/views/includes';
?><header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="#bootstrap"></use>
        </svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 text-secondary">Магазин</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Доставка</a></li>
        <li><a href="#" class="nav-link px-2 text-white">О нас</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Контакты</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
      </form>
      <!-- // иконка корзины -->
      <div class="text-end">
        <a class="btn btn-outline-light me-2 btn-sm" href="/?controller=cart">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
          </svg>
          <span id='cartCntItems' class="badge badge-light" style='color: red'>

            <?php if ($_smarty_tpl->getValue('cartCntItems') > 0) {?>
            <?php echo $_smarty_tpl->getValue('cartCntItems');?>

            <?php } else { ?> 0
            <?php }?>

          </span>
        </a>
        <?php if ((null !== ($_smarty_tpl->getValue('arrUser') ?? null))) {?>
        <a href="/?controller=user&" type="button" class="btn btn-primary btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"></path>
          </svg>
          <?php echo $_smarty_tpl->getValue('arrUser')['displayName'];?>

        </a>
        <a href="/?controller=user&action=logout" type="button" class="btn btn-outline-danger btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"></path>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"></path>
</svg>
                Выход
</a>
        <?php } else { ?>
        <a href="/?controller=user&action=templateauth" type="button" class="btn btn-outline-light me-2 btn-sm">Войти</a>
        <a href="/?controller=user&action=templatereg" type="button" class="btn btn-warning btn-sm">Регистрация</a>
        <?php }?>
      </div>
    </div>
  </div>
</header><?php }
}
