<?php
/* Smarty version 5.4.1, created on 2024-10-22 03:38:18
  from 'file:/var/www/html/WebStore/views/default/../includes/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67171e2ae143d9_96172948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa466c9b8dec07ab7bab90c7a29d01b920a94c3e' => 
    array (
      0 => '/var/www/html/WebStore/views/default/../includes/header.tpl',
      1 => 1729568280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67171e2ae143d9_96172948 (\Smarty\Template $_smarty_tpl) {
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
        <a class="btn btn-outline-light me-2" href="/?controller=cart">
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

        <a type="button" class="btn btn-outline-light me-2">Войти</a>
        <a href="/?controller=user" type="button" class="btn btn-warning">Регистрация</a>
      </div>
    </div>
  </div>
</header><?php }
}
