<?php

namespace app\module\admin\controllers;

use app\models\ImageUpload;
use Yii;
use app\models\News;
use app\models\SearchNews;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchNews();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
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
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $this->actionSetImage($model->id);

            return $this->redirect(['view', 'id' => $model->id]);

        }

        $imageModel = new ImageUpload();

        return $this->render('create', [
            'model' => $model,
            'imageModel' => $imageModel,
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing News model.
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
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {

            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSetImage($id)
    {
        $model = new ImageUpload;

        if(Yii::$app->request->isPost) {

            //находим авто по ИД
            $news = $this->findModel($id);

            //вытягиваем картинку из ПОСТ
            $file = UploadedFile::getInstance($model, 'image');

            //берем у рассматриваемого авто существующую картинку
            $currentImage = $news->pic_path;

            //передаем на сохранение название текущего файла и загруженного файла (чтоб если что перезаписать)
            $img_name = $model->UploadFile($file, $currentImage);

            //если фото успешно записаось в модель делаем редирект
            if($news->saveImage($img_name)) {

                return $this->redirect(['view', 'id' => $news->id]);

            }
        }

        //если фоточка не была загружена возвращаем к полю загрузки
        return $this->render('image',['model'=>$model]);
    }

}
