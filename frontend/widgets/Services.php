<?php
namespace frontend\widgets;
use yii\base\Widget;
use common\models\Service;

class Services extends Widget{

    function run()
    {
        $widget_services=Service::find()->all();
         return $this->render('service',[
            'widget_services'=>$widget_services,

            ]);

    }

}
