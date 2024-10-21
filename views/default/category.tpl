<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{$templateWebPath}css/main.css">


    <title>{$pageTitle}</title>
</head>

<body>


    {include file = "../includes/header.tpl"}

    <div class="wrapper">
    {include file = "../includes/sidebarMenu.tpl"}

        <div id='content'>
            <h5>Товары категории {$recCategory['name_ru']}</h5>
            {foreach $recProducts as $prod}
            <div class="card" style="width: 13rem;">
                <img class="card-img-top" src="www/img/products/{$prod['image']}" alt="{$prod['name_ru']}">
                <div class="card-body">
                    <h5 class="card-title">{$prod['name_ru']}</h5>
                    <h7 class='card-title'>{$prod['price']} руб.</h7>
                    <!-- <p class="card-text">{$prod['description']}</p> -->
                    <a href="/?controller=product&id={$prod['id']}/" class="btn btn-primary">Купить</a>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
    {include file = "../includes/footer.tpl"}

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>