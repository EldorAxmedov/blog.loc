<?php
namespace frontend\widgets;
use yii\base\Widget;
use common\models\Category;

class Categories extends Widget{

    function run()
    {
        $categories=Category::find()->all();
        return $this->render('category',[
            'categories'=>$categories,

            ]);

    }

}
