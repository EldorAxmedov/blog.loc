<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'SAM-IT-TECHNOLOGY';
?>
<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>НАШИ УСЛУГИ</h2>
                    <p>мы оказываем услуги в<br>в сфере информационных технологий</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-6 col-sm-6">
                <div class="feature-block text-center">
                    <div class="icon-box">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h4 class="wow fadeInUp" data-wow-delay=".3s">Создание web-сайтов</h4>
                    <p class="wow fadeInUp" data-wow-delay=".5s"> Корпоративные сайты<br>Промо-сайты<br>Сайт-визитка<br> Телеграм боты</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 col-sm-6">
                <div class="feature-block text-center">
                    <div class="icon-box">
                        <i class="fa fa-sitemap"></i>
                    </div>
                    <h4 class="wow fadeInUp" data-wow-delay=".3s">Сеть и сетевое оборудование</h4>
                    <p class="wow fadeInUp" data-wow-delay=".5s">
                        Роутеры<br> Wi Fi оборудование<br> Свичи<br>Маршрутизаторы<br>Коммутаторы</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 col-sm-6">
                <div class="feature-block text-center">
                    <div class="icon-box">
                        <i class="icon-desktop"></i>
                    </div>
                    <h4 class="wow fadeInUp" data-wow-delay=".3s">Обслуживание компьютеров</h4>
                    <p class="wow fadeInUp" data-wow-delay=".5s">установка и настройка Windows 7, Windows 8, Windows 10<br>
                        установка всех драйверов<br>
                        чистка от вирусов - установка антивируса<br>
                        установка и настройка принтеров, сканеров<br>
                        восстановление информации </p>
                </div>
            </div>
        </div>
          </div>
</section>
<section id="counter">
    <div class="container">
        <div class="row">
            <div class="title">
                <h2>СТАТИСТИКА</h2>
                 </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s">
                    <i class="ion-code"></i>
                    <p class="count-text">
                        <span class="counter-digit">3</span>
                    </p>
                    <p>Web сайты</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="block wow fadeInRight" data-wow-delay=".5s">
                    <i class="fa fa-sitemap"></i>
                    <p class="count-text">
                        <span class="counter-digit">5 </span> +
                    </p>
                    <p>Сеть и сетевое оборудование</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="block wow fadeInRight" data-wow-delay=".7s">
                    <i class="icon-desktop"></i>
                    <p class="count-text">
                        <span class="counter-digit">10</span>
                    </p>
                    <p>Обслуживание компьютеров</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="block wow fadeInRight" data-wow-delay=".9s">
                    <i class="fa fa-users"></i>
                    <p class="count-text">
                        <span class="counter-digit">15</span>
                    </p>
                    <p>Доволных клиентов</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>НАШИ ПОСЛЕДНИЕ РАБОТЫ</h2>
                            </div>
                <div class="block">
                    <div class="recent-work-mixMenu">
                        <ul>
                            <li><button class="filter" data-filter="all">ВСЕ</button></li>
                            <li><button class="filter" data-filter=".category-1">ВЕБ САЙТЫ</button></li>
                            <li><button class="filter" data-filter=".category-2">СЕТЕВЫЕ УСЛУГИ</button></li>
                            <li><button class="filter" data-filter=".category-3">ТЕЛЕГРАМ БОТЫ</button></li>

                        </ul>
                    </div>
                    <div class="recent-work-pic">
                        <ul id="mixed-items">
                            <li class="mix category-1 col-md-4 col-xs-6" data-my-order="1">
                                <a class="example-image-link" href="/img/anatoliy.jpg" data-lightbox="example-set">
                                    <img class="img-responsive" src="/img/anatoliy.jpg" alt="">
                                    <div class="overlay">
                                        <h3>ANATOLIY.UZ</h3>
                                        <i class="ion-ios-plus-empty"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mix category-1 col-md-4 col-xs-6" data-my-order="2">
                                <a class="example-image-link" href="/img/stem.jpg" data-lightbox="example-set">
                                    <img class="img-responsive" src="/img/stem.jpg" alt="">
                                    <div class="overlay">
                                        <h3>STEM.SAMDCHTI.UZ</h3>
                                        <i class="ion-ios-plus-empty"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mix category-2 col-md-4 col-xs-6" data-my-order="3">
                                <a class="example-image-link" href="/img/tarmoq.jpg" data-lightbox="example-set">
                                    <img class="img-responsive" src="/img/tarmoq.jpg" alt="">
                                    <div class="overlay">
                                        <h3>СЕТЕВЫЕ УСЛУГИ</h3>
                                        <i class="ion-ios-plus-empty"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mix category-3 col-md-4 col-xs-6" data-my-order="4">
                                <a class="example-image-link" href="/img/bot2.jpg" data-lightbox="example-set">
                                    <img class="img-responsive" src="/img/bot2.jpg" alt="">
                                    <div class="overlay">
                                        <h3>ANATOLIYCOMPANYBOT</h3>
                                        <i class="ion-ios-plus-empty"></i>
                                    </div>
                                </a>
                            </li>
                               </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="play-video">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">О НАС</h2>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Посмотрите видео о нашей компании </p>
                    <a href="https://www.youtube.com/watch?v=UMNWxy4zjes" class="html5lightbox" data-width=800 data-height=400>
                        <div class="button ion-ios-play-outline wow zoomIn" data-wow-delay=".3s"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team">
    <div class="container">
        <div class="row">
            <div class="title">
                <h2>НАША КОМАНДА</h2>
                <p>у нас работают профессионалы</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s">
                    <img src="/img/team-img1.jpg" alt="">
                    <div class="team-overlay">
                        <h3>АХМЕДОВ ЭЛДОР <span>Веб программист</span></h3>
                        <span class="icon"><i class="ion-quote"></i></span>
                        <p>Он занимается разработкой программной части сайтов, настраивает скрипты, формы, личные кабинеты пользователей, создает связки между сайтом и платежными системами, работает с базами данных, в которых хранятся материалы сайта.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4  col-sm-4 col-xs-6">
                <div class="block wow fadeInLeft" data-wow-delay=".6s">
                    <img src="/img/team-img2.jpg" alt="">
                    <div class="team-overlay">
                        <h3>ХАЙРИДДИНОВ АСАН <span>Системный админинистратор</span></h3>
                        <span class="icon"><i class="ion-quote"></i></span>
                        <p>Системный администратор — это специалист, который поддерживает правильную работу компьютерной техники и программного обеспечения, а также отвечает за информационную безопасность организации.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4  col-sm-4 col-xs-6">
                <div class="block wow fadeInLeft" data-wow-delay=".9s">
                    <img src="/img/team-img3.jpg" alt="">
                    <div class="team-overlay">
                        <h3>ROBERT SMITH <span>Product Designer</span></h3>
                        <span class="icon"><i class="ion-quote"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="pricing-table">
    <div class="container">
        <div class="row">
            <div class="title">
                <h2>ПРЕЙСКУРАНТЫ</h2>
                            </div>
            <div class="col-md-4 col">
                <div class="block text-center wow fadeInLeft" data-wow-delay=".3s">
                    <ul>
                        <li>
                            <h4>Веб сайты</h4>
                            <p> от <span>400 000</span></p>
                        </li>
                        <li><p>САЙТ-ВИЗИТКА</p></li>
                        <li><p>ПОМО-САЙТЫ</p></li>
                        <li><p>КОРПОРАТИВНЫЕ САЙТЫ</p></li>
                        <li><p>САЙТЬ БОТЫ</p></li>
                        <li><p>интернет магазины</p></li>
                             <li>
                            <a href="#" class="btn btn-buy">ЗАКАЗАТЬ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col">
                <div class="block text-center wow zoomIn" data-wow-delay=".3s">
                    <ul>
                        <li>
                            <h4>Сетевые услуги</h4>
                            <p>0Т<span>100 000</span></p>
                        </li>
                        <li><p>настройка сети – маршрутизаторы, свитчи, Wi-Fi, локальные сети и.т.д</p></li>
                        <li><p>администрирование сетей</p></li>
                        <li><p>монтаж сетей</p></li>
                        <li><p>системная интеграция </p></li>

                        <li>
                            <a href="#" class="btn btn-buy">ЗАКАЗАТЬ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col">
                <div class="block text-center wow fadeInRight" data-wow-delay=".3s">
                    <ul>
                        <li>
                            <h4>Компьютерные услуги</h4>
                            <p>0Т<span>100 000</span></p>
                        </li>
                        <li><p> установка Windows Xp, Windows 7, Windows 8, Windows 10</p></li>
                        <li><p> установка всех драйверов</p></li>
                        <li><p>чистка от вирусов - установка антивируса</p></li>
                        <li><p>установка и настройка принтеров, сканеров</p></li>
                        <li>
                            <a href="#" class="btn btn-buy">ЗАКАЗАТЬ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>БЛОГ</h2>
                    <p>Здесь вы можете посмотреть последние новости</p>
                </div>
                <div id="blog-post" class="owl-carousel">

                        <?php foreach ($posts as $post):?>
                        <div class="block">

                            <img src="/uploads/<?=$post->img?>" alt="" class="img-responsive-blog-post" height="200px" width="100%">
                            <div class="content">
                                <h4><a href="<?=Url::to(['post/view', 'id'=>$post->id])?>"><?=$post->title?></a></h4>
                                <small><?=$post->created_at?></small>
                                <p>
                                    <?=$post->description?>
                                </p>
                                <a href="<?=Url::to(['post/view', 'id'=>$post->id])?>" class="btn btn-read">ПОДРОБНЕЕ</a>

                            </div>
                        </div>

                    <?php endforeach;?>
                </div>
        </div>
    </div>
</section>


