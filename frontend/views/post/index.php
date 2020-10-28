<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\imagine\Image;
?>

<section class="blog-area ptb-140 bg-1">
            <div class="container">
                <div class="row">
                    <?php foreach ($alls as $all):?>
                    <div class="col-sm-6 col-xs-12 col fea">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <?php $image = Yii::getAlias("@frontend/web/uploads/".$all->img);
                                $image2 = Image::thumbnail($image, 400, 220)
                                ->save(Yii::getAlias("@frontend/web/images/post/index/".$all->img), ['quality' => 70]);
                                ?>
                                <img src="/images/post/index/<?=$all->img?>">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 5 Love</a></li>
                                    </ul>
                                </div>
                                <h3><a href="<?=Url::to(['post/view', 'id'=>$all->id])?>"><?=$all->title?></a></h3>
                                <p><?=$all->description?></p>
                                <a href="<?=Url::to(['post/view', 'id'=>$all->id])?>" class="btn-style">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="col-xs-12">
                        <div class="pagination-wrap">
                          <?php echo LinkPager::widget([
                            'pagination' => $pagination,
                            'options'=>[
                                'firstPageLabel' => '',
                                'lastPageLabel' => '',
                                'prevPageLabel'=>'',
                                'nextPageLabel' => '',
                                

                            ],
                    ]);?> 
                        </div>

                    </div>
                 </div>
               </div>
        </section>



                



