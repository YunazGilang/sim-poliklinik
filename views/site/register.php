<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */

$this->title = 'Register';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];


$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions3 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

    <div class="container-fluid warnadasar">
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <?= Html::img(["css/logo.png"], ["class" => "img-responsive"]) ?>
            </div>
        </div>
    </div>


    <div class=" container-fluid">
        <div class="row" style="background: #fff">
            <div class="col-md-9 col-sm-12">
                <?= $this->render('slider') ?>
            </div>
            <div class="col-md-3 col-sm-12">
                <div>
                    <h3><?= Html::a("Login", ["site/login"]) ?> | Daftar</h3>
                    <?php $form = ActiveForm::begin(['id' => 'register-form', 'enableClientValidation' => false]); ?>
                    <?= $form
                        ->field($model, 'name', $fieldOptions1)
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('name')]) ?>
                    <?= $form
                        ->field($model, 'username', $fieldOptions2)
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>
                    <?= $form
                        ->field($model, 'password', $fieldOptions3)
                        ->label(false)
                        ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <?= Html::submitButton("<i class='fa fa-lock'></i> DAFTAR", ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
<?= $this->render('footer') ?>