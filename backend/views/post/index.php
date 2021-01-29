<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Посты';
?>
<div class="post-index">


    <p>
        <?= Html::a('Создать пост', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
     <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            [
            'attribute'=>'title',
            'value'=>function($model){
             return $model->getTitle();
            }
                    ],
            [
                'attribute'=>'description',
                'value'=>function($model){
                    return $model->getDescription();
                    }
                ],
            //'content:ntext',
            //'img',
            //'video',
            //'created_at',
            //'count_view',
            //'slug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
