<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string|null $img
 * @property string|null $video
 * @property string $created_at
 * @property int $count_view
 * @property string|null $slug
 *
 * @property Category $category
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
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
            [['category_id', 'title', 'description', 'content'], 'required'],
            [['category_id', 'count_view'], 'integer'],
            [['title', 'description', 'content'], 'string'],
            [['video', 'slug'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'category_id' => 'Kategoriya',
            'title' => 'Sarlavha',
            'translate_title' => Yii::t('yii','Title'),
            'description' => Yii::t('yii','Description'),
            'translate_description' => Yii::t('yii','Description'),
            'content' => 'To\'liq',
            'translate_content' => Yii::t('yii','Content'),
            'img' => 'Rasm',
            'video' => 'Video',
            'created_at' => 'Vaqti',
            'count_view' => 'Ko\'rishlar soni',
            'slug' => 'Slag',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
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
