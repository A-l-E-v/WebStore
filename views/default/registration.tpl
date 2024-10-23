<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Регистрация</title>
    {include file = "../includes/head.tpl"}

</head>

<body>


    {include file = "../includes/header.tpl"}

    <div class="wrapper">
        {include file = "../includes/sidebarMenu.tpl"}

        <!-- класс для ajax-формы -->
        <div class='form' id='reg'>

            <section>
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="card text-black" style="background-color: #ccc; border-radius: 25px;">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <p class="text-center h1 fw-bold ">Регистрация</p>
                                    <form class="mx-1 mx-md-4" method="post">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="name" name="name" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="name">Ваше имя (по желанию)</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" name="email" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="email">Ваш Email*</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="pwd1" name="pwd1" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="pwd1">Пароль*</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="pwd2" name="pwd2" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="pwd2">Повторите пароль*</label>
                                            </div>
                                        </div>



                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="/" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Назад</a>
                                            <button type="button" onclick="registerNewUser();" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="margin-left: 15px;">Зарегистрироваться</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

<script src = 'www/js/jquery-3.7.1.js' type='text/javascript'></script>
<script src = 'www/js/register.js' type='text/javascript'></script>

</body>

</html>