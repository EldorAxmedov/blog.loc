
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="top">

<header id="navigation" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <h1 class="navbar-brand">
                <a href="<?=Url::to(['site/index'])?>"><img src="/img/logo.png" height="50" width="50" alt=""></a>
            </h1>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation" style="padding-top: 15px;">
            <ul id="nav" class="nav navbar-nav menu">
                <li><a href="<?=Url::to(['site/index'])?>">Главная</a></li>
                <li><a href="<?=Url::to(['post/index'])?>">Блог</a></li>
                <li><a href="#contact-form">Контакты</a></li>
            </ul>
        </nav>
        <!-- /main nav -->

    </div>
</header>

<div class="wrapper">
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h1></h1>
                        <h2></h2>
                        <div class="buttons">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrolldown">
            <a id="scroll" href="#features" class="scroll"></a>
        </div>
    </section>
    <section id="blog-left">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
    <?=$content?>
                </div>
    <div class="col-md-3 col-md-offset-1 col-sm-4">
        <div class="widget">
            <form>
                <i class="fa fa-search"></i>
                <input type="text" name="search" class="" placeholder="TYPE KEYWORD HERE...">
            </form>
        </div>
        <div class="widget">
            <span>Категории</span>
            <div class="widget-body">
                <ul class="category-list">
                    <li><a href="<?=Url::to(['post/index'])?>">Все</a></li>
                    <li><a href="<?=Url::to(['post/net'])?>">Компьютерные сети</a></li>
                    <li><a href="<?=Url::to(['post/computer'])?>">Компьютеры</a></li>
                    <li><a href="<?=Url::to(['post/site'])?>">Веб сайты</a></li>
                    <li><a href="<?=Url::to(['post/graphic'])?>">Компьютерная графика</a></li>
                    <li><a href="<?=Url::to(['post/programming'])?>">Программирование</a></li>
                </ul>
            </div>
        </div>
        <?=frontend\widgets\About::widget();?>

        <div class="widget sidebar-tags">
            <span>Теги</span>
            <div class="widget-body">
                <a href="#">Веб сайт</a>
                <a href="#">Интернет магазин</a>
                <a href="#">Сеть</a>
                <a href="#">Телеграм бот</a>
                <a href="#">Компьютер</a>
                <a href="#">Дизайн</a>
                <a href="#">Компьютерная графика</a>
                <a href="#">Коннектор</a>
                <a href="#">Принтер</a>
            </div>
        </div>

    </div>
</div>
</div>
</section>
    <section id="contact-form">
        <div class="container-fluid">
            <div class="row">
                <div class="title">
                    <h2>КОНТАКТЫ</h2>
                    <p>Массив Согдиана, ул. Али Кушчи 18/12<br>
                        Телефон: +99897 917 66 53</p>
                </div>
                <div class="col-md-12">

                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae5ad6c8c5e176f881df5e049180e03618f83a0f9ccf550813cef40572a7ec499&amp;
                    width=100%25&amp;height=632&amp;lang=ru_RU&amp;scroll=false"></script>

                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <a href="#"><img src="img/Logo_footer.png" width="320" height="220" alt=""></a>
                        <p>Все права защищены © 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

