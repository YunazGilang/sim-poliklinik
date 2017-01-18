<?php

namespace app\controllers;

use app\models\Laborat;
use app\models\search\LaboratSearch;
use yii\web\Controller;
use yii\web\HttpException;

class LaboratController extends Controller
{
    public $enableCsrfValidation = false;

/*    public function behaviors()
*    {
*        //apply role_action table for privilege (doesn't apply to super admin)
*        return \app\models\Action::getAccess($this->id);
*    }
*/
	
	public function actionIndex()
	{
		$searchModel  = new LaboratSearch;
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
		$model = new Laborat();

		try {
            if ($model->load($_POST) && $model->save()) {
            	return $this->redirect(["index"]);
            }
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
            $model->addError('_exception', $msg);
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
        }
            return $this->redirect(["index"]);
	}

	protected function findModel($id)
	{
		if (($model = User::findOne($id)) !== null) {
			return $model;
		} else {
			throw new HttpException(404, 'The requested page does not exist.');
		}
	}
}
