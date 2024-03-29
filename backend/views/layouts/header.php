<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">Admin Panel</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- Messages: style can be found in dropdown.less-->

                <li><?= Html::a(
                        'Chiqish',
                        ['site/logout'],
                        ['data-method' => 'post', 'class' => 'btn btn-flat']
                    ) ?></li>
                <!-- Tasks: style can be found in dropdown.less -->

            </ul>
        </div>
    </nav>
</header>
