<?php

namespace frontend\controllers;

use Yii;
use common\models\Post;
use common\models\PostSearch;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{

    public $layout = '@frontend/views/post/main.php';
    /**
     * {@inheritdoc}
     */
      /**
     * Lists all Post models.
     * @return mixed
     */

    public function actionIndex()
    {
        $alls=Post::find()->orderBy(['id'=>SORT_DESC]);
        $pagination = new Pagination([
            'defaultPageSize'=>3,
            'totalCount'=>$alls->count(),
        ]);
         $alls = $alls->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'alls' => $alls,
            'pagination'=>$pagination,


        ]);
    }

    public function actionNet()
    {
       $nets=Post::find()->where(['category_id'=>2])->all();

        return $this->render('net', [
            'nets' => $nets,


        ]);
    }
    public function actionComputer()
    {
        $computers=Post::find()->where(['category_id'=>4])->all();

        return $this->render('computer', [
            'computers' => $computers,


        ]);
    }

    public function actionSite()
    {
        $sites=Post::find()->where(['category_id'=>1])->all();

        return $this->render('site', [
            'sites' => $sites,


        ]);
    }
    public function actionGraphic()
    {
        $graphics=Post::find()->where(['category_id'=>5])->all();

        return $this->render('graphic', [
            'graphics' => $graphics,


        ]);
    }

    public function actionProgramming()
    {
        $programs=Post::find()->where(['category_id'=>6])->all();

        return $this->render('programming', [
            'programs' => $programs,


        ]);
    }


    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {

        return $this->render('view', [

            'model' => $this->findModel($id),

        ]);
    }



    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
         $model->count_view+=1;
         $model->save();
                     return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
