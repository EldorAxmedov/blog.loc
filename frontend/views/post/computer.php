<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Компьютеры';
$this->params['breadcrumbs'][] = $this->title;
?>


                <?php foreach ($computers as $computer):?>
                    <div class="card mb-3 blog-margin">
                        <img src="uploads/<?=$computer->img?>" class="card-img-top img-responsive" alt="fghdfgdfgdfgdf">
                        <div class="card-body">
                            <h3 class="card-title "><h3 class="blog-title"><?=$computer->title?></h3>
                                <p class="card-text"><?=$computer->description?></p>
                                <p class="card-text"><i class="fa fa-clock-o"> <?=$computer->created_at?></i></p>
                                <a href="<?=Url::to(['post/view', 'id'=>$computer->id])?>" class="btn btn-read-blog">ПОДРОБНЕЕ</a>
                                <hr class="blog-hr">
                        </div>
                    </div>
                <?php endforeach;?>


