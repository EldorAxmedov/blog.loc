<?php

namespace backend\controllers;

use Yii;
use common\models\Service;
use common\models\ServiceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ServiceController implements the CRUD actions for Service model.
 */
class ServiceController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles'=>['?']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout', 'index', 'create', 'update', 'delete', 'view', 'error'],
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Service models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Service model.
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
     * Creates a new Service model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Service();

        if ($model->load(Yii::$app->request->post())) {
            $model->title = json_encode($model->translate_title,JSON_UNESCAPED_UNICODE);
            $model->description = json_encode($model->translate_description,JSON_UNESCAPED_UNICODE);
            $model->content = json_encode($model->translate_content,JSON_UNESCAPED_UNICODE);

           if ($model->save()){
               $model->img=UploadedFile::getInstance($model, 'img');
           if ($model->img and $model->upload()) {
               $model->img=$model->img->baseName.'.'.$model->img->extension;
                $model->save();
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }else {
               return $this->render('create', [
                   'model' => $model,
               ]);
           }
    }else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

        }

    /**
     * Updates an existing Service model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
public function actionUpdate($id)
{
    $model = $this->findModel($id);
    $img = $model->img;

    if ($model->load(Yii::$app->request->post())) {

        $model->title = json_encode($model->translate_title,JSON_UNESCAPED_UNICODE);
        $model->description = json_encode($model->translate_description,JSON_UNESCAPED_UNICODE);
        $model->content = json_encode($model->translate_content,JSON_UNESCAPED_UNICODE);

        if ($model->save()) {
            $model->img = UploadedFile::getInstance($model, 'img');
            if ($model->img and $model->upload()) {
                $model->img = $model->img->baseName.'.'.$model->img->extension;
                $model->save();
            }else{
                $model->img = $img;
                $model->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $model->translate_title = json_decode($model->title,true);
            $model->translate_description = json_decode($model->description,true);
            $model->translate_content = json_decode($model->content,true);
            return $this->render('update', [
                'model' => $model,
            ]);
        }

    } else {

        $model->translate_title = json_decode($model->title,true);
        $model->translate_description = json_decode($model->description,true);
        $model->translate_content = json_decode($model->content,true);
        return $this->render('update', [
            'model' => $model,
        ]);
    }
}

    /**
     * Deletes an existing Service model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Service model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Service the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Service::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
