<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\imagine\Image;

$this->title = 'SAM-IT-TECHNOLOGY';
?>
 <section class="service-area home2-service-area ptb-140" id="xizmatlar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp" style="visibility: visible;">
                        <div class="section-title text-center">
                            <h2><?=Yii::t('yii', 'Services')?></h2>
                            <p><?=Yii::t('yii', 'IT services is a list of ready-made methods and solutions for qualified support in the field of information technology, in simple terms.')?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                        <div class="service-wrap">
                            <div class="service-content">
                                <h3><?=Yii::t('yii', 'Web programming')?></h3>
                                <p><?=Yii::t('yii', 'Development of high-quality sites: business cards, landing pages, online stores, catalogs, blogs. Site name selection, registration, hosting.')?></p>
                                <a href="<?=Url::to(['service/view', 'id'=>9])?>"><?=Yii::t('yii', 'More details')?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
                        <div class="service-wrap">
                            <div class="service-content">
                                <h3><?=Yii::t('yii', 'Network and networking equipment')?></h3>
                                <p><?=Yii::t('yii', 'Our specialists carry out installation of any complexity and structure. From the computer network of a small office to the cable networks of an office complex.')?></p>
                                <a href="<?=Url::to(['service/view', 'id'=>11])?>"><?=Yii::t('yii', 'More details')?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s;">
                        <div class="service-wrap">
                            <div class="service-content">
                                <h3><?=Yii::t('yii', 'Video surveillance service')?></h3>
                                <p><?=Yii::t('yii', 'We are ready to offer you low prices for video surveillance equipment and calculate the installation of video surveillance at your facility.')?></p>
                                <a href="<?=Url::to(['service/view', 'id'=>10])?>"><?=Yii::t('yii', 'More details')?></a>
                            </div>
                        </div>
                    </div>
                   </div>
            </div>
        </section>
        <!-- .service-area end -->
        <!-- about-area start -->
		<section class="about-area pb-140 about-area2" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12 wow fadeInLeft">
						<div class="about-wrap">
							<h2><?=Yii::t('yii', 'About')?></h2>
							<p><?=Yii::t('yii', 'Any companies, enterprises and organizations carry out their activities using information. This is the most demanded product in our time, which helps to rapidly develop business in a wide variety of industries.')?></p>
							<p><?=Yii::t('yii', 'To operate with data, receive it, process and transfer it, a number of equipment, software and services are required that are provided by IT companies.')?></p>
							<p><?=Yii::t('yii', 'We specialize in the development and implementation of system solutions in the field of modern information technology. Our main task is to find the optimal forms of mutually beneficial work with the client. To do this, we make every effort to develop and improve the services and technologies we provide.')?></p>
							<p><?=Yii::t('yii', 'Our advantages')?></p>
							<ul>
								<li><?=Yii::t('yii', 'Simplicity and openness of communication')?></li>
								<li><?=Yii::t('yii', 'Formation of effective teams')?></li>
								<li><?=Yii::t('yii', 'Adaptability to customer processes')?></li>
								</ul>
						</div>
					</div>
                    <div class="col-md-6 col-xs-12 wow fadeInRight">
                        <div class="row mt-60">
                            <div class="col-sm-6 col-xs-12 col">
                                <div class="about-items mb-30">
                                    <i class="fa fa-diamond"></i>
                                    <h3><?=Yii::t('yii', 'Quality and terms')?></h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 col">
                                <div class="about-items mb-30">
                                    <i class="fa fa-briefcase"></i>
                                    <h3><?=Yii::t('yii', 'Cost control')?></h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 col">
                                <div class="about-items">
                                    <i class="fa fa-bookmark"></i>
                                    <h3><?=Yii::t('yii', 'Reliability guarantees')?></h3>
                                </div>
                            </div><div class="col-sm-6 col-xs-12 col">
                                <div class="about-items">
                                    <i class="fa fa-database"></i>
                                    <h3><?=Yii::t('yii', 'Saving money')?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section>
		<!-- about-area end -->

		<!-- fanfact-area start -->
		<section class="fanfact-area parallax black-opacity"  data-speed="5" data-bg-image="/images/bg/1.jpg">
			<div class="table">
				<div class="table-cell">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-6 col wow fadeInUp" data-wow-delay=".1s">
								<div class="fanfact-wrap">
									<h2 class="counter">5</h2>
									<p>Веб-разработка</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6 col wow fadeInUp" data-wow-delay=".2s">
								<div class="fanfact-wrap">
									<h2 class="counter">3</h2>
									<p>Сеть и сетевое оборудование</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6 col wow fadeInUp" data-wow-delay=".3s">
								<div class="fanfact-wrap">
									<h2 class="counter">2</h2>
									<p>Обслуживание серверо</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6 col  wow fadeInUp" data-wow-delay=".4s">
								<div class="fanfact-wrap">
									<h2 class="counter">2</h2>
									<p>Обслуживание Видеонаблюдения</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- fanfact-area end -->
 	 <!-- porftolio-area start -->
        <section class="porftolio-area ptb-100 portfolio-area3" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="portfolio-menu text-center">
                            <button class="active" data-filter="*"><?=Yii::t('yii', 'All')?></button>
                            <button data-filter=".website"><?=Yii::t('yii', 'Website')?></button>
                            <button data-filter=".responsiv"><?=Yii::t('yii', 'Network hardware')?></button>
                            <button data-filter=".minimal"><?=Yii::t('yii', 'Video surveillance')?></button>
                         </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-xs-12">
                         <div class="portfolio website col">
                            <div class="portfolio-wrap">
                                <div class="overlay">
                                    <a class="popup" href="/images/portfolio/stem.samdchti.uz.gif">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <h3><?=Yii::t('yii', 'Website')?></h3>
                                    <p><?=Yii::t('yii', 'A quality website that we will develop for you')?></p>
                                </div>
                                <div class="portfolio-img">
                                    <img src="/images/portfolio/2.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="portfolio website col">
                            <div class="portfolio-wrap">
                                <div class="overlay">
                                    <a class="popup" href="/images/portfolio/english.jpg">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <h3><?=Yii::t('yii', 'Website')?></h3>
                                    <p><?=Yii::t('yii', 'A quality website that we will develop for you')?></p>
                                </div>
                                <div class="portfolio-img">
                                    <img src="/images/portfolio/2.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="portfolio website col">
                            <div class="portfolio-wrap">
                                <div class="overlay">
                                    <a class="popup" href="/images/portfolio/anatoliy.jpg">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <h3><?=Yii::t('yii', 'Website')?></h3>
                                    <p><?=Yii::t('yii', 'A quality website that we will develop for you')?></p>
                                </div>
                                <div class="portfolio-img">
                                    <img src="/images/portfolio/2.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="portfolio responsiv col">
                            <div class="portfolio-wrap">
                                <div class="overlay">
                                    <a class="popup" href="/images/portfolio/5.jpg">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <h3><?=Yii::t('yii', 'Network hardware')?></h3>
                                    <p><?=Yii::t('yii', 'We offer our clients a wide range of networking services')?></p>
                                </div>
                                <div class="portfolio-img">
                                    <img src="/images/portfolio/5.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                                               
                        <div class="portfolio minimal col">
                            <div class="portfolio-wrap">
                                <div class="overlay">
                                    <a class="popup" href="/images/portfolio/1.jpg">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <h3><?=Yii::t('yii', 'Video surveillance')?></h3>
                                    <p><?=Yii::t('yii', 'A wide range of services for the design, maintenance and installation of video surveillance systems')?></p>
                                </div>
                                <div class="portfolio-img">
                                    <img src="/images/portfolio/1.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="portfolio responsiv col">
                            <div class="portfolio-wrap">
                                <div class="overlay">
                                    <a class="popup" href="/images/portfolio/5.jpg">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <h3><?=Yii::t('yii', 'Network hardware')?></h3>
                                    <p><?=Yii::t('yii', 'We offer our clients a wide range of networking services')?></p>
                                </div>
                                <div class="portfolio-img">
                                    <img src="/images/portfolio/5.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        
                </div>
                
            </div>
        </section>
		<!-- porftolio-area end -->

		<!-- video-area start -->
		<section class="video-area  parallax black-opacity wow fadeInUp"  data-speed="5" data-bg-image="/images/bg/2.jpg">
			<h2 class="hidden">Video area</h2>
			<div class="table">
				<div class="table-cell">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="video-wrap text-center">
									<a href="https://www.youtube.com/watch?v=S7wCAquf9Us" class="video-popup">
										<i class="fa fa-play"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- video-area end -->

        <!-- team-area start -->
        <section class="team-area team-area2 team-area3" style="margin-top:30px;" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
						<div class="section-title text-center">
                            <h2><?=Yii::t('yii', 'Our team')?></h2>
                            <p><?=Yii::t('yii', 'Our team and experience for the implementation of your IT projects!')?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                        <div class="team-wrap3">
                            <div class="team-img">
                                <img src="/images/team/team2/1.jpg" alt="" />
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        <div class="team-content">
                                <h3><?=Yii::t('yii', 'Axmedov Eldor')?></h3>
                                <p><?=Yii::t('yii', 'Web developer')?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-wrap3">
                            <div class="team-img">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <img src="/images/team/team2/2.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h3><?=Yii::t('yii', 'Xayridinov Asan')?></h3>
                                <p><?=Yii::t('yii', 'Network administrator')?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp"  data-wow-delay=".3s">
                        <div class="team-wrap3">
                            <div class="team-img">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <img src="/images/team/team2/3.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h3><?=Yii::t('yii', 'Turopov Tohir')?></h3>
                                <p><?=Yii::t('yii', 'System administrator')?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-wrap3">
                            <div class="team-img">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <img src="/images/team/team2/4.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h3><?=Yii::t('yii', 'Yangiboyev Ro\'zimurod')?></h3>
                                <p><?=Yii::t('yii', 'System administrator')?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-area end -->

	   	<!-- blog-area start -->
		<section class="blog-area ptb-140 bg-1" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
						<div class="section-title text-center">
							<h2><?=Yii::t('yii', 'Last news')?></h2>
							<p><?=Yii::t('yii', 'Useful articles and reviews for clients and everyone interested')?></p>
						</div>
					</div>
				</div>
				<div class="row">
				<?php foreach ($posts as $post):?>
                <?php if($post->getTitle()!=''):?>
					<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
						<div class="blog-wrap">
							<div class="blog-img">
                                <?php $image = Yii::getAlias("@frontend/web/uploads/".$post->img);
                                $image2 = Image::thumbnail($image, 400, 220)
                               ->save(Yii::getAlias("@frontend/web/images/post/".$post->img), ['quality' => 70]);
                                 $img = Image::getImagine()->open($image2); ?>
                                <?php if($post->img){?>
                                    <img src="/web/images/post/<?=$img?>">
                                <?php }else{?>
                                    <img src="/images/about.png?>">
                                <?php }?>

							</div>
							<div class="blog-content">
								<div class="blog-meta">
									<ul>
										<li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
										<li><a href="#"><i class="fa fa-clock-o"></i> <?=Yii::$app->formatter->asDate($post->created_at,'yyyy-MM-dd');?></a></li>										
									</ul>
								</div>
								<h3><a href="<?=Url::to(['post/view', 'id'=>$post->id])?>"><?=$post->getTitle()?></a></h3>
								<p><?=$post->getDescription()?></p>
								<a href="<?=Url::to(['post/view', 'id'=>$post->id])?>" class="btn-style"><?=Yii::t('yii', 'More details')?></a>
							</div>
						</div>
					</div>
                    <?php endif;?>
				<?php endforeach; ?>
			 </div>
			</div>
		</section>
		<!-- blog-area end -->

