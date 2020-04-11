<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

                <?php foreach ($alls as $all):?>
                <div class="card mb-3 blog-margin">
                    <img src="uploads/<?=$all->img?>" class="card-img-top img-responsive" alt="fghdfgdfgdfgdf">
                    <div class="card-body">
                        <h3 class="card-title "><h3 class="blog-title"><?=$all->title?></h3>
                        <p class="card-text"><?=$all->description?></p>
                        <p class="card-text"><i class="fa fa-clock-o"> <?=$all->created_at?></i></p>
                        <a href="<?=Url::to(['post/view', 'id'=>$all->id])?>" class="btn btn-read-blog">ПОДРОБНЕЕ</a>
                         <hr class="blog-hr">
                    </div>
                </div>
                <?php endforeach;?>
<div style="margin-left:35%">
<?php echo LinkPager::widget(['pagination' => $pagination,
]);?>
</div>
