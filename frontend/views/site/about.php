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
                            <h3><?=Yii::t('yii', 'About')?></h3>
                            <p><?=Yii::t('yii', 'Any companies, enterprises and organizations carry out their activities using information. This is the most demanded product in our time, which helps to rapidly develop business in a wide variety of industries.')?></p>
                            <p><?=Yii::t('yii', 'To operate with data, receive it, process and transfer it, a number of equipment, software and services are required that are provided by IT companies.')?>></p>
                            <p><?=Yii::t('yii', 'We specialize in the development and implementation of system solutions in the field of modern information technology. Our main task is to find the optimal forms of mutually beneficial work with the client. To do this, we make every effort to develop and improve the services and technologies we provide.')?>></p>
                            <p><?=Yii::t('yii', 'Our advantages')?></p>
							<ul>
                                <li><?=Yii::t('yii', 'Simplicity and openness of communication')?></li>
                                <li><?=Yii::t('yii', 'Formation of effective teams')?></li>
                                <li><?=Yii::t('yii', 'Adaptability to customer processes')?></li>
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
                            <h2><?=Yii::t('yii', 'Services')?></h2>
                            <p><?=Yii::t('yii', 'IT services is a list of ready-made methods and solutions for qualified support in the field of information technology, in simple terms.')?></p>
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
                                <h3><?=$service->getTitle()?></h3>
                                <p><?=$service->getDescription()?></p>
                                <a href="<?=Url::to(['service/view', 'id'=>$service->id])?>"><?=Yii::t('yii', 'More details')?></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>