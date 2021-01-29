<?php
use yii\helpers\Url;
?>
<div class="sidebar-menu">
                                <ul>
                                    <li class="active"><a href="/site/service">Все</a></li>
                                    <?php foreach ($widget_services as $widget_service):?>
                                    <li><a href="<?=Url::to(['service/view', 'id'=>$widget_service->id])?>"><?=$widget_service->getTitle()?></a></li>
                                    <? endforeach;?>
                                    
                                </ul>
                            </div>
     




<?php
