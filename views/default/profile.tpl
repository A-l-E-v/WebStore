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
            <h5>Ваш профиль пользователя</h5>
            <section>
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="card text-black" style="background-color: #ccc; border-radius: 25px;">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <p class="text-center h1 fw-bold ">Ваш профиль пользователя</p>
                                    <form class="mx-1 mx-md-4" method="post">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="name" name="name" value="{$arrUser['name']}" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="name">Ваше имя</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="phone" name="phone" value="{$arrUser['phone']}" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="phone">Телефон</label>
                                            </div>
                                        </div>



                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="address" name="address" value="{$arrUser['address']}" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="address">Адрес</label>
                                            </div>
                                        </div>
 

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="newpwd1" name="newpwd1" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="newpwd1">Новый пароль*</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="newpwd2" name="newpwd2" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="newpwd2">Повторите пароль*</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="curPwd" name="curPwd" class="form-control" style="background-color: #ddd; border-radius: 15px;" />
                                                <label class="form-label" for="curPwd">Текущий пароль</label>
                                            </div>
                                        </div>



                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="/" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Назад</a>
                                            <button type="button" onclick="updateUserData();" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="margin-left: 15px;">Сохранить</button>
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
    {include file = "../includes/footer.tpl"}

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>