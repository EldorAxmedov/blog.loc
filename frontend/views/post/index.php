<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\imagine\Image;
?>

<section class="blog-area ptb-140 bg-1">
            <div class="container">
                <div class="row">
                   <?php foreach ($alls as $all):?>
                   <?php if($all->getTitle()!=''):?>
                    <div class="col-sm-6 col-xs-12 col fea">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <?php //$image = Yii::getAlias("@frontend/web/uploads/".$all->img);
                                //$image2 = Image::thumbnail($image, 400, 220)
                                //->save(Yii::getAlias("@frontend/web/images/post/index/".$all->img), ['quality' => 70]);
                                ?>
                                <?php if($all->img){?>
                                <img src="/uploads/<?=$all->img?>">
                                <?php }else{?>
                                <img src="/images/about.png?>">
                                <?php }?>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i><?=$all->created_at?></a></li>
                                    </ul>
                                </div>
                                <h3><a href="<?=Url::to(['post/view', 'id'=>$all->id])?>"><?=$all->getTitle()?></a></h3>
                                <p><?=$all->getDescription()?></p>
                                <a href="<?=Url::to(['post/view', 'id'=>$all->id])?>" class="btn-style"><?=Yii::t('yii', 'More details')?></a>
                            </div>
                        </div>
                    </div>
                   <?php endif;?>

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



                



