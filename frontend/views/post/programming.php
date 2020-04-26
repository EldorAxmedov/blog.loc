<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Программирование';
$this->params['breadcrumbs'][] = $this->title;
?>

                <?php foreach ($programs as $program):?>
                    <div class="card mb-3 blog-margin">
                        <img src="/uploads/<?=$program->img?>" class="card-img-top img-responsive" alt="fghdfgdfgdfgdf">
                        <div class="card-body">
                            <h3 class="card-title "><h3 class="blog-title"><?=$program->title?></h3>
                                <p class="card-text"><?=$program->description?></p>
                                <p class="card-text"><i class="fa fa-clock-o"> <?=$program->created_at?></i></p>
                                <a href="<?=Url::to(['post/view', 'id'=>$program->id])?>" class="btn btn-read-blog">ПОДРОБНЕЕ</a>
                                <hr class="blog-hr">
                        </div>
                    </div>
                <?php endforeach;?>

