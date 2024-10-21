

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