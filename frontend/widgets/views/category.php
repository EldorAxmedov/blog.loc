<?php
use yii\helpers\Url;
?>

      <div class="category-wrap mb-30">
                                <h3 class="sidebar-title"><?=Yii::t('yii', 'Category')?></h3>
                                <ul>
                                	<?php foreach ($categories as $category): ?>
                                	<li><a href="#"><?=$category->name?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
