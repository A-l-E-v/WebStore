<!DOCTYPE html>
<html lang="en">

<head>
    {include file = "../includes/head.tpl"}

</head>

<body>


    {include file = "../includes/header.tpl"}

    <div class="wrapper">
    {include file = "../includes/sidebarMenu.tpl"}

        <div id='content'>
        <div class="card mb-3" style="max-width: 90%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="www/img/products/{$recProduct['image']}" 
      class="img-fluid rounded-start" 
      alt="{$recProduct['name_ru']}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{$recProduct['name_ru']}</h5>
        <p class="card-text">{$recProduct['description']}</p>
        <p class="card-text"><medium class="text-body-secondary">Цена: {$recProduct['price']} руб.</medium></p>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
    {include file = "../includes/footer.tpl"}

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>