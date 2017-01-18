<?php

namespace app\controllers;

use app\models\JenisPembayaran;
use app\models\search\JenisPembayaranSearch;
use yii\web\Controller;
use yii\web\HttpException;

class JenisPembayaranController extends Controller
{
    public $enableCsrfValidation = false;

	public function actionIndex()
	{
		$searchModel  = new JenisPembayaranSearch;
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
            $model = new JenisPembayaran;
            if ($model->load($_POST)&& $model->save()){
                return $this->redirect(["index"]);
            }
        return $this->render('create', ['model' => $model]);
	}

	public function actionUpdate($id)
	{
	$model = $this->findModel($id);

        if ($model->load($_POST) && $model->save()){
            return $this->redirect(["index"]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
	}

	public function actionDelete($id)
	{
        try {
            $this->findModel($id)->delete();
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
            \Yii::$app->getSession()->setFlash('error', $msg);
            return $this->redirect(["index"]);
            }
        }

	protected function findModel($id)
	{
		if (($model = JenisPembayaran::findOne($id)) !== null) {
			return $model;
		} else {
			throw new HttpException(404, 'The requested page does not exist.');
		}
	}
}