<?php
use yii\helpers\Url;
?>

        <div class="widget">
							<span>О нас</span>
							<div class="widget-body">
								<img class="img-responsive" src="uploads/<?=$model->img?>" alt="">
								<span class="title"><?=$model->title?></span>
                                <p><a href="<?=Url::to(['post/view', 'id'=>$model->id])?>"><?=$model->description?></p>
							</div>
                </div>
