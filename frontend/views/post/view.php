<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $model->title;
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
                                <img src="/uploads/<?=$model->img?>" alt="" width="100%">
                            </div>
                            <div class="blog-details-content">
                                <h3><?=$model->title?></h3>
                                <p><?=$model->content?><p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <aside class="right-sidebar">
                            <div class="search-sidebar mb-30">
                            </div>
                            <?=frontend\widgets\Categories::widget();?>
                            <div class="related-post mb-30">
                                <h3 class="sidebar-title">Последние новости</h3>
                                <ul>
                                    <?php foreach ($posts as $post):?> 
                                          <li class="related-post-items">
                                        <div class="post-img">
                                            <img src="/uploads/<?=$post->img?>" alt="" width="70" height="70">
                                        </div>
                                        <div class="post-info">
                                            <a href="<?=Url::to(['post/view', 'id'=>$post->id])?>"><?=$post->title?></a>
                                            <p><?=Yii::$app->formatter->asDate($post->created_at)?></p>
                                        </div>
                                    </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                            
                        </aside>
                    </div>
                </div>
            </div>
        </section>