<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\imagine\Image;


$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="service-area ptb-100">
            <div class="container">
                <div class="row">
                	<?php foreach ($services as $service):?>
                	
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                            	 <?php $image = Yii::getAlias("@frontend/web/uploads/".$service->img);
                                $image2 = Image::thumbnail($image, 400, 220)
                                ->save(Yii::getAlias("@frontend/web/images/service/".$service->img), ['quality' => 70]);
                                 //$img = Image::getImagine()->open($image2); ?>
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
        