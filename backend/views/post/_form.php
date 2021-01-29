<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Category;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?php
    $languages = Yii::$app->params['languages'];
    $i = 0;
    ?>
    <ul class="nav nav-tabs">
        <?php foreach ($languages as $language => $label) { ?>
            <li class="<?= ($i==0)?'active':'' ?>"><a data-toggle="tab" href="#<?=$language?>"><?=$label?></a></li>
            <?php $i++; } ?>
    </ul>
    <div class="tab-content">
    <?php $j=0; foreach ($languages as $language => $label) { ?>
        <div id="<?=$language?>" class="tab-pane fade in <?= ($j==0)?'active':'' ?>">
            <?= $form->field($model, 'translate_title['.$language.']')->textarea(['rows' => 6])->label(Yii::t('yii', 'Title', null, $language)) ?>
            <?= $form->field($model, 'translate_description['.$language.']')->textarea(['row'=>6,'maxlength' => true])->label(Yii::t('yii','Description',null,$language)) ?>
            <?php
            echo $form->field($model, 'translate_content['.$language.']')->widget(CKEditor::className(), [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ])->label(Yii::t('yii', 'Content', null, $language));?>
        </div>
        <?php $j++; } ?>
    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'count_view')->textInput() ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
