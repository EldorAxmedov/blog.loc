<?php
/**
 * Created by PhpStorm.
 * User: dilshod
 * Date: 5/15/17
 * Time: 5:01 PM
 */

namespace frontend\widgets;

use yii\bootstrap\Widget;
use Yii;

class LanguageWidget extends Widget
{
    public $language;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $currUrl = Yii::$app->getRequest()->getUrl();
        $this->language = Yii::$app->language;
        $dropdown=null;

        foreach (Yii::$app->params['languages'] as $key => $language) {
            $dropdown .= '<a href="' . str_replace(Yii::$app->language, $key, $currUrl) . '">' . $language . '</a>'.' | ';
        }


        return $dropdown;

    }

}