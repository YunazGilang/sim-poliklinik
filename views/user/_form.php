<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<?php $form = ActiveForm::begin([
        'id' => 'User',
        'layout' => 'horizontal',
        'enableClientValidation' => false,
        'errorSummaryCssClass' => 'error-summary alert alert-error',
        'options' => ['enctype' => 'multipart/form-data'],
    ]
);
?>

<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'role_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\Role::find()->all(), 'id', 'name'),
    ['prompt' => 'Select']
); ?>
<?= $form->field($model, 'photo_url')->widget(\kartik\file\FileInput::className(), [
    'options' => ['accept' => 'image/*'],
    'pluginOptions' => [
        'allowedFileExtensions' => ['jpg', 'png', 'jpeg', 'gif', 'bmp'],
        'maxFileSize' => 250,
    ],
]) ?>
<?php
if ($model->photo_url != null) {
    ?>
    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-3">
            <?= Html::img(["uploads/" . $model->photo_url], ["width" => "150px"]); ?>
        </div>
    </div>
    <?php
}
?>

<hr/>
<div class="row">
    <div class="col-md-offset-3 col-md-7">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success']); ?>
        <?= Html::a('<i class="fa fa-chevron-left"></i> Kembali', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
