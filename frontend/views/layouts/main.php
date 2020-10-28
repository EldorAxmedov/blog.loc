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
<body>
<?php $this->beginBody() ?>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloder-wrap -->
        <div id="cssLoader3" class="preloder-wrap">
            <div class="loader">
                <div class="child-common child4"></div>
                <div class="child-common child3"></div>
                <div class="child-common child2"></div>
                <div class="child-common child1"></div>
            </div>
        </div>
        <!-- search-area -->
        <div class="search-area">
            <span class="closs-btn">Закрыть</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search Here">
                                <button type="button" name="button" class="btn-style">Поиск</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-area -->
        <!-- heared area start -->
        <header class="header-area">
            <div class="header-top bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="header-top-left">
                                <p>Мы ИТ-компания, предлагаем различные ИТ-услуги</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="header-top-right text-right">
                                <ul>
                                    <li><a href="https://www.facebook.com/samittechnology"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="https://youtube.com/channel/UC7Hsd1IVMIgX7cNimZWd5dg"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 hidden-sm hidden-xs">
                            <div class="logo">
                                <h1><a href="<?= Yii::$app->homeUrl?>">SAMITGROUP</a></h1>
                            </div>
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <div class="header-middle-right">
                                  <ul>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p>ПОН - СУБ (9:00 - 20:00)</p>
                                            <span>Воскресенье</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p>Почта</p>
                                            <span>samittechnology1@gmail.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p>Телефон</p>
                                            <span> (+99897) 917-66-53</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom"  id="sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
                            <div class="logo">
                                <h1><a href="<?= Yii::$app->homeUrl?>">SAMITGROUP</a></h1>
                            </div>
                        </div>
                        <div class="col-md-11 hidden-sm hidden-xs">
                            <div class="mainmenu" style="margin-left: 368px">
                                <ul id="navigation">
                                  <?php $action=Yii::$app->controller->action->id;
                                  $controller=Yii::$app->controller->id;
                            ?>
                                <li class="<?=($controller=='site' and $action=='index')?'active':''?>"><a href="<?= Yii::$app->homeUrl?>">Главная</i></a>
                                    </li>
                                    <li class="<?=($action=='about')?'active':''?>"><a href="<?=Url::to(['site/about'])?>">О нас</i></a>
                                    </li>
                                    <li class="<?=($action=='service')?'active':''?>"><a href="<?=Url::to(['site/service'])?>">Услуги</i></a>
                                    </li>
                                    <li class="<?=($controller=='post')?'active':''?>"><a href="<?=Url::to(['post/index'])?>">Новости</i></a>
                                    </li>                           

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2 col-xs-3">
                            <div class="search-wrap text-right">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
                            <div class="responsive-menu-wrap floatright"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- heared area end -->
		<!-- slider area start -->
		<section class="slider-area">
			<div class="slider-active3 slider-next-prev-style">
				<div class="slider-items">
					<img src="/images/slider/5.jpg" alt="" class="slider">
					<div class="slider-content text-center">
						<div class="table">
							<div class="table-cell">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-md-8 col-md-offset-2">
											<h2>Веб-разработка</h2>
											<p>Разработка качественных сайтов: визитки, лэндинги, интернет-магазины, каталоги, блоги. Подбор имени сайта, регистрация, размещение на хостинге.</p>
											<ul>
												<li><a href="<?= Url::to(['service/view', 'id'=>9])?>">Подробно</a></li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-items">
					<img src="/images/slider/6.jpg" alt="" class="slider">
					<div class="slider-content text-center">
						<div class="table">
							<div class="table-cell">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-md-8 col-md-offset-2">
											<h2>Сеть и сетевое оборудование</h2>
											<p>Наши специалисты осуществляют монтаж любой сложности и структуры. От компьютерной сети небольшого офиса до кабельных сетей комплекса офисных зданий.</p>
											<ul>
                                            <ul>
												<li><a href="<?= Url::to(['service/view', 'id'=>11])?>">Подробно</a></li>
												
											</ul>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="slider-items">
					<img src="/images/slider/3.jpg" alt="" class="slider">
					<div class="slider-content text-center">
						<div class="table">
							<div class="table-cell">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-md-8 col-md-offset-2">
											<h2>Обслуживание видеонаблюдения</h2>
											<p>Мы готовы, вам предложить низкие цены на оборудования по видеонаблюдения и рассчитать монтаж видеонаблюдения на вашем объекте.</p>
											<ul>
												<li><a href="<?= Url::to(['service/view', 'id'=>10])?>">Подробно</a></li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- slider area end -->
        <!-- .service-area start -->
       <?=$content?>

		<!-- footer-area start  -->
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-widget footer-menu">
                               <a href="<?= Yii::$app->homeUrl?>"><img src="/images/SamITTechnology.png"></a>
                            </div>
                        </div>
						<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
							<div class="footer-widget footer-logo">
                                <h1>SAMITGROUP</h1>
                                <p>Мы ИТ-компания, предлагаем различные ИТ-услуги</p>
                                <ul>
                                    <li><i class="fa fa-phone"></i> +99897 9176653</li>
                                    <li><i class="fa fa-envelope"></i> samittechnology1@gmail.com</li>
                                </ul>
							</div>
						</div>
                        <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-widget footer-menu">
                                <h2>Меню</h2>
                                <ul>
                                    <li><a href="<?=Url::to(['site/about'])?>">О нас</a></li>
                                    <li><a href="<?=Url::to(['site/service'])?>">Наши услуги</a></li>
                                    <li><a href="#team">Наша команда</a></li>
                                    <li><a href="<?=Url::to(['post/index'])?>">Последние новости</a></li>
                                </ul>
                            </div>
                        </div>
                      </div>
				</div>
			</div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" style="color: white;">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
		</footer>
		<!-- footer-area end  -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
