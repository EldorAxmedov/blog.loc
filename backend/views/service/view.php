<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Service */

$this->title = $model->getTitle();
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php
    $languages = Yii::$app->params['languages'];
    ?>
    <div class="tab-content">
        <?php foreach ($languages as $language => $label) { ?>
            <table class="table table-striped table-bordered detail-view">
                <div id="<?=$language?>" class="tab-pane fade">
                    <tr>
                        <th class="width-20prs"><?=Yii::t('yii','Title',null,$language)?></th>
                        <td><?=$model->getTitle($language)?></td>
                    </tr>
                    <tr>
                        <th class="width-20prs"><?=Yii::t('yii','Description',null,$language)?></th>
                        <td><?=$model->getDescription($language)?></td>
                    </tr>
                    <tr>
                        <th class="width-20prs"><?=Yii::t('yii','Content',null,$language)?></th>
                        <td><?=$model->getContent($language)?></td>
                    </tr>
                </div>
            </table>

        <?php } ?>

    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'img',
            'created_at',
        ],
    ]) ?>

</div>
