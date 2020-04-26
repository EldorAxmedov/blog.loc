<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сеть и сетевое оборудование';
$this->params['breadcrumbs'][] = $this->title;
?>


                <?php foreach ($nets as $net):?>
                    <div class="card mb-3 blog-margin">
                        <img src="/uploads/<?=$net->img?>" class="card-img-top img-responsive" alt="fghdfgdfgdfgdf">
                        <div class="card-body">
                            <h3 class="card-title "><h3 class="blog-title"><?=$net->title?></h3>
                                <p class="card-text"><?=$net->description?></p>
                                <p class="card-text"><i class="fa fa-clock-o"> <?=$net->created_at?></i></p>
                                <a href="<?=Url::to(['post/view', 'id'=>$net->id])?>" class="btn btn-read-blog">ПОДРОБНЕЕ</a>
                                <hr class="blog-hr">
                        </div>
                    </div>
                <?php endforeach;?>

