<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $model->getTitle();
$this->params['breadcrumbs'][] = ['label' => 'Post', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
   <section class="blog-details-area ptb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="blog-details-wrap">
                            <div class="blog-details-img">
                                <?php if($model->img){?>
                                    <img src="/uploads/<?=$model->img?>" alt="" width="100%">
                                <?php }else{?>
                                    <img src="/images/about.png?>" alt="" width="100%">
                                <?php }?>

                            </div>
                            <div class="blog-details-content">
                                <h3><?=$model->getTitle()?></h3>
                                <p><?=$model->getContent()?><p>
                                <p><i class="fa fa-calendar" style="color:#296DC1"> </i> <?=$model->created_at?>
                                    <i class="fa fa-eye" style="color:#296DC1"></i> <?=$model->count_view?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <aside class="right-sidebar">
                            <div class="search-sidebar mb-30">
                            </div>
                            <?=frontend\widgets\Categories::widget();?>
                            <div class="related-post mb-30">
                                <h3 class="sidebar-title"><?=Yii::t('yii', 'Last news')?></h3>
                                <ul>
                                    <?php foreach ($posts as $post):?>
                                    <? if($post->getTitle()):?>
                                          <li class="related-post-items">
                                        <div class="post-img">
                                            <?php if($post->img){?>
                                                <img src="/uploads/<?=$post->img?>" width="70" height="70">
                                            <?php }else{?>
                                                <img src="/images/about.png?>" alt="" width="70" height="70">
                                            <?php }?>
                                         </div>
                                        <div class="post-info">
                                            <a href="<?=Url::to(['post/view', 'id'=>$post->id])?>"><?=$post->getTitle()?></a>
                                            <p><?=Yii::$app->formatter->asDate($post->created_at)?></p>
                                        </div>
                                    </li>
                                    <?endif;?>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                            
                        </aside>
                    </div>
                </div>
            </div>
        </section>