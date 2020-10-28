<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="about-area ptb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="about-img black-opacity" style="background-image: url(&quot;/images/about.png&quot;); background-size: cover; background-position: center center; height: 495px;">
                            <img src="/images/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="about-wrap">
                            <h3>О нас</h3>
                            <p>Любые компании, предприятия и организации осуществляют свою деятельность при помощи информации. Это самый востребованный продукт в наше время, который помогает стремительно развивать бизнес в самых различных отраслях.</p>
							<p>Для оперирования данными, их получения, обработки и передачи необходим ряд оборудования, программного обеспечения и услуг, которые предоставляют IT компании.</p>
							<p>Мы специализируемся на разработке и внедрении системных решений в области современных информационных технологий. Основная наша задача – найти оптимальные формы взаимовыгодной работы с клиентом. Для этого мы прилагаем все усилия, направленные на развитие и совершенствование предоставляемых нами услуг и технологий.</p>
							<p>Наши преимущества</p>
							<ul>
								<li>Простота и открытость коммуникаций.</li>
								<li>Формирование эффективных комманд.</li>
								<li>Адаптивност к процессам заказчика</li>
								</ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-area pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Наши услуги</h2>
                            <p>ИТ-услуги — это перечень готовых способов и решений квалифицированной поддержки в области информационных технологий, если говорить простыми словами.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($about_services as $service):?>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="service-wrap">
                            <div class="service-img">
                                <img src="/images/service/<?=$service->img?>" alt="">
                            </div>
                            <div class="service-content">
                                <h3><?=$service->title?></h3>
                                <p><?=$service->description?></p>
                                <a href="<?=Url::to(['service/view', 'id'=>$service->id])?>">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>