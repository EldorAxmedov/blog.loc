<?php
namespace frontend\widgets;
use yii\base\Widget;
use common\models\Post;

class About extends Widget{

    function run()
    {
        $model=Post::find()->where(['id'=>11])->one();
        return $this->render('about',[
            'model'=>$model,

            ]);

    }

}
