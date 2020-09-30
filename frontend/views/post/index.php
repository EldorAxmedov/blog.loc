<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

<section class="blog-area ptb-140 bg-1">
            <div class="container">
                <div class="row">
                    <?php foreach ($alls as $all):?>
                    <div class="col-sm-6 col-xs-12 col fea">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <img src="/uploads/<?=$all->img?>">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 5 Comment</a></li>
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



                



