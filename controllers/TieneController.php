<?php

namespace app\controllers;

use Yii;
use app\models\Tiene;
use app\models\TieneSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TieneController implements the CRUD actions for Tiene model.
 */
class TieneController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Tiene models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TieneSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tiene model.
     * @param integer $f_idestado
     * @param integer $f_idenc
     * @return mixed
     */
    public function actionView($f_idestado, $f_idenc)
    {
        return $this->render('view', [
            'model' => $this->findModel($f_idestado, $f_idenc),
        ]);
    }

    /**
     * Creates a new Tiene model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tiene();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'f_idestado' => $model->f_idestado, 'f_idenc' => $model->f_idenc]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tiene model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $f_idestado
     * @param integer $f_idenc
     * @return mixed
     */
    public function actionUpdate($f_idestado, $f_idenc)
    {
        $model = $this->findModel($f_idestado, $f_idenc);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'f_idestado' => $model->f_idestado, 'f_idenc' => $model->f_idenc]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tiene model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $f_idestado
     * @param integer $f_idenc
     * @return mixed
     */
    public function actionDelete($f_idestado, $f_idenc)
    {
        $this->findModel($f_idestado, $f_idenc)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tiene model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $f_idestado
     * @param integer $f_idenc
     * @return Tiene the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($f_idestado, $f_idenc)
    {
        if (($model = Tiene::findOne(['f_idestado' => $f_idestado, 'f_idenc' => $f_idenc])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
