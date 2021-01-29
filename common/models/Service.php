<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $content
 * @property string|null $img
 * @property string $created_at
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }
    public $translate_title;
    public $translate_description;
    public $translate_content;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['count_view'], 'integer'],
            [['title', 'description'], 'string'],
            [['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['translate_title','translate_description','translate_content'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'img' => 'Img',
            'created_at' => 'Created At',
        ];
    }

     public function upload()
    {
        if ($this->validate()) {
            $this->img->saveAs(Yii::$app->basePath.'/../frontend/web/uploads/' . $this->img->baseName . '.' . $this->img->extension);
            return true;
        } else {
            return false;
        }
    }
    public function getTitle($language=null)
    {
        $title = json_decode($this->title,true);
        if ($language) {
            if (isset($title[$language])) {
                return $title[$language];
            } else {
                return null;
            }
        }
        if (isset($title[Yii::$app->language])) {
            if ($title[Yii::$app->language]!=''){
                return $title[Yii::$app->language];
            }


        }else{
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
    public function getDescription($language=null)
    {
        $title = json_decode($this->description,true);
        if ($language) {
            if (isset($title[$language])) {
                return $title[$language];
            } else {
                return null;
            }
        }

        if (isset($title[Yii::$app->language])) {
            if ($title[Yii::$app->language]!=''){
                return $title[Yii::$app->language];
            }


        }else{
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
    public function getContent($language=null)
    {
        $title = json_decode($this->content,true);
        if ($language) {
            if (isset($title[$language])) {
                return $title[$language];
            } else {
                return null;
            }
        }
        if (isset($title[Yii::$app->language])) {
            if ($title[Yii::$app->language]!=''){
                return $title[Yii::$app->language];
            }


        }else{
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }

}
