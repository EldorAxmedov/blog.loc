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
<html lang="ru">
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
        <!-- preloder-wrap -->
        <!-- search-area -->
        <div class="search-area">
            <span class="closs-btn">Close</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search Here">
                                <button type="button" name="button" class="btn-style">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-area -->
		<!-- heared area start -->
		<header class="header-area header-area2">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="header-top-left">
                                <p>We are landscaping company, offer various landscape services</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="header-top-right text-right">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="header-bottom  bg-2"  id="sticky-header">
                <div class="container">
    				<div class="row">
                        <div class="col-md-3 col-sm-8 col-xs-6">
    						<div class="logo">
    							<h1><a href="index.html">Martxa</a></h1>
    						</div>
    					</div>
    					<div class="col-md-8 hidden-sm hidden-xs">
    						<div class="mainmenu">
                                <ul id="navigation">
    								<li class="active"><a href="index.html">Home</a>
    									</li>
    								<li><a href="about.html">About</a>
    									                                    </li>
    								<li><a href="service.html">Service</a>
    									
    								</li>
    								<li><a href="team.html">Team </a>
    									</li>
    										
    								<li><a href="portfolio.html">Portfolio</a>
                                        
                                    </li>
    								<li><a href="blog.html">Blog</a>
                                       
    								</li>
    								<li><a href="contact.html">Contact</a></li>
    								<li><a href="#">Pages</a>
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
											<h2>Welcome to our Martxa</h2>
											<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<ul>
												<li><a href="#">Read More</a></li>
												<li><a href="#">Get Started</a></li>
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
											<h2>Hello i am Martxa</h2>
											<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<ul>
												<li><a href="#">Get Started</a></li>
												<li><a href="#">Read More</a></li>
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
						<div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
							<div class="footer-widget footer-logo">
                                <h1>Martxa</h1>
                                <p>Lor separat existentie es un myth. Por scientie, musica, sport etc, litot  usa li sam larLor separat existentie es un myth existentie.</p>
                                <ul>
                                    <li><i class="fa fa-phone"></i> +455 5475 6645</li>
                                    <li><i class="fa fa-envelope"></i> info@yourdomail.com</li>
                                </ul>
							</div>
						</div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-widget footer-menu">
                                <h2>Footer Menu</h2>
                                <ul>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="#">Customer Insights</a></li>
                                    <li><a href="service.html">FInancial Service</a></li>
                                    <li><a href="#">Business Devlopment</a></li>
                                    <li><a href="">Project Management</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
                            <div class="footer-widget instagram-wrap">
                                <h2>Instagram</h2>
                                <ul>
                                    <li><a href="#"><img src="/images/instagram/1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/images/instagram/2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/images/instagram/3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/images/instagram/4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/images/instagram/5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/images/instagram/6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                            <div class="footer-widget quick-contact">
                                <h2>Quick Contact</h2>
                                <form action="#">
                                    <input type="text" placeholder="Full Name">
                                    <input type="email" placeholder="Email">
                                    <textarea name="massage" id="massage" cols="30" rows="10" placeholder="Massage"></textarea>
                                    <button type="button" name="button" class="btn-style">Send</button>
                                </form>
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
