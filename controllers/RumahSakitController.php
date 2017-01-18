<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 9/23/16
 * Time: 1:44 PM
 */

namespace app\controllers;

use app\models\RumahSakit;
use app\models\search\RumahSakitSearch;
use yii\web\Controller;
use yii\web\HttpException;

class RumahSakitController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $searchModel = new RumahSakitSearch;
        $dataProvider = $searchModel->search($_GET);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionCreate()
    {
        $model = new RumahSakit();
        if($model->load($_POST) && $model->save())
        {
            return $this->redirect(["index"]);
        }
        return $this->render('update', ['model' => $model,]);
    }
    public function actionDelete($id)
    {
        try {
            $this->findModel($id)->delete();
        } catch (\Exception $e){
            $msg = (isset($e->errorInfo[2])) ? $e->errorInfo[2] : $e->getMessage();
            \Yii::$app->getSession()->setFlash('error',$msg);
        }
        return $this->redirect(["index"]);
    }
    protected function findModel($id)
    {
        if(($model = RumahSakit::findOne($id)) !== null) {
            return $model;
        }
        else {
            throw new HttpException(404,'The requested page does not exist');
        }
    }
}