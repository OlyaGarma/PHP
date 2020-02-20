<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
    <title><?php echo $page_title; ?></title>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">

    <link href="static/js/bootstrap.min.js" rel="stylesheet" type="text/css"/>
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">  

    <link href="/static/css/style.css" rel="stylesheet">

</head>
<body>

<header class="img">
<nav class ="line" class="nav">
    <div class="container">
        <div class="menu-container">
            <ul class="nav navbar-nav navbar-nav-right">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная</a></li>
                <li class="nav-item" ><a class="nav-link" href="/about">О проекте</a></li>
                <li class="nav-item"><a  class="nav-link"href="/experience">Услуги</a></li>
                <li class="nav-item"><a  class="nav-link" href="/work">Прайс</a></li>
                <li class="nav-item"><a  class="nav-link" href="/contact">Контакты</a></li>
                <li>
                    <? if(isset($_SESSION['login'])): ?>
                    <a>Выйти</a>
                    <? else: ?>
                    <a>Личный кабинет</a>
                    <? endif; ?>
                </li>
            </ul>

        </div>
    </div>
    
</nav>
</header>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Авторизация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p id="error"></p>
                <form name="authorisation">
                    <div class="form-group">
                        <label for="login">Ваш логин</label>
                        <input name="login" type="text" class="form-control" id="login"  placeholder="логин">
                    </div>
                    <div class="form-group">
                        <label for="password">Ваш пароль</label>
                        <input name="pwd" type="password" class="form-control" id="password" placeholder="пароль">
                    </div>
                    <button type="submit" class="btn btn-warning">Войти</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <a role="button" href="/registration" class="btn btn-warning">Регистрация</a>
            </div>
        </div>
    </div>
</div>

<section>
    <?php include_once $content; ?>
</section>


<!-- <div id="contact">
     <div class="container content-lg">
        <div class="row">
            <div class="text">
                 <h2>Контакты</h2>
                    <p>Всегда Вам рад</p>
            </div> 
        </div>          
        <div class="row">
            <div>
                <h5>Адрес</h5>
                <a href="#">Наб.Обводного канала,д.1 </a>
            </div>
            <div>
                <h5>Телефон</h5>
                <a href="#">+7(911)-123-45-67</a>
            </div>
                <div>
                <h5>Почта</h5>
                <a href="mailto:#"> arsenii@gmail.com</a>
                </div>
        </div>  
    </div>
</div>
</footer> -->
</body>
</html>