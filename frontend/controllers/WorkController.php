<?php
namespace frontend\controllers;

use Yii;
use frontend\models\Work;
use yii\web\Controller;
use yii\data\ArrayDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class WorkController extends Controller
{
    private $data = [
        ['id' => 1, 'app_name' => 'Dallas #Hack Bible', 'step' => 'Readiness'],
        ['id' => 2, 'app_name' => 'Auckland #Hack Bible', 'step' => 'Project Definition']
    ];
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ],
            'set-locale'=>[
                'class'=>'common\actions\SetLocaleAction',
                'locales'=>array_keys(Yii::$app->params['availableLocales'])
            ]
        ];
    }

    public function actionIndex()
    {

        $dataProvider = new ArrayDataProvider([
            'allModels' => $this->data,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => ['name', 'language']
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'id' => $id,
            'model' => $model
        ]);
    }

    /**
     * Updates an existing App model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $this->saveModel($id, $model)) {
            return $this->redirect(['view', 'id' => $id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing App model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if ($id < array_count_values($this->data)) {
            array_splice($this->data, $id, 1);
        }
        return $this->redirect(['index']);
    }

    /**
     * @param integer $id
     * @param Work $model
     * @return boolean
     */
    protected function saveModel($id, $model)
    {
        if ($id < count($this->data)) {
            $this->data[$id]['id'] = $model->id;
            $this->data[$id]['app_name'] = $model->app_name;
            $this->data[$id]['step'] = $model->step;
            return true;
        }

        return false;
    }

    /**
     * Finds the App model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Work the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if ($id < count($this->data)) {
            $row = $this->data[$id];
            $model = new Work();
            $model->id = $row['id'];
            $model->app_name = $row['app_name'];
            $model->step = $row['step'];
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
