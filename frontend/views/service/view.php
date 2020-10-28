<?php

use yii\helpers\Html;
use yii\helpers\Url;

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Service */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="single-service-area ptb-100">
            <div class="container">
                <div class="row">
<div class="col-md-8 col-xs-12">
                        <div class="blog-details-wrap">
                            <div class="blog-details-img">
                                <img src="/uploads/<?=$model->img?>" alt="">
                            </div>
                            <div class="blog-details-content">
                                <h3><?=$model->title?></h3>
                                <p><?=$model->content?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-12 col-sm-6">
                        <aside class="service-sidebar">
                             <?=frontend\widgets\Services::widget();?>
                          
                            <div class="banner-wrap">
                                <img src="/images/service/SamITTechnology.png" alt="">
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
