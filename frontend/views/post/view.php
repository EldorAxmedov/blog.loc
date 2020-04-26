<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<section id="blog-left">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">

                           <div class="card mb-3 blog-margin">
                        <img src="/uploads/<?=$model->img?>" class="card-img-top img-responsive" alt="">
                        <div class="card-body">
                            <h3 class="card-title "><h3 class="blog-title"><?=$model->title?></h3>
                                <p class="card-text card-text-img"><?=$model->content?></p>
                                <p class="card-text" style="margin-top: 15px; font-size: 16px;"><b>Категория: </b><?=$model->category->name?> <i class="fa fa-clock-o" ></i> <?=$model->created_at?><i class="fa fa-eye" style="margin-left: 10px;"></i> <?=$model->count_view?></p>


                        </div>
                    </div>

            </div>

        </div>
    </div>
</section>