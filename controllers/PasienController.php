<?php
namespace app\controllers;

use app\models\Pasien;
use app\models\search\PasienSearch;
use yii\web\Controller;
use yii\web\HttpException;

class PasienController extends Controller{
    public $enableCsrfValidation = false;
    
    public function actionIndex()
    {
        $searchModel = new PasienSearch;
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

	/**
	 * Creates a new User model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
    public function actionCreate()
    {
        $model = new Pasien();
        if ($model->load($_POST) && $model->save()) {
            return $this->redirect(["index"]);
        } 
        return $this->render('create', ['model' => $model]);
    }

	/**
	 * Updates an existing User model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
    public function actionUpdate($id)
    {
            $model = $this->findModel($id);

            if ($model->load($_POST)&& $model->save()) {
                return $this->redirect(["index"]);
            }
           
            return $this->render('update', [
                'model' => $model,
            ]);
    }

	/**
	 * Deletes an existing User model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
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

	/**
	 * Finds the User model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return User the loaded model
	 * @throws HttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Pasien::findOne($id)) !== null) {
			return $model;
		} else {
			throw new HttpException(404, 'The requested page does not exist.');
		}
	}
}
        