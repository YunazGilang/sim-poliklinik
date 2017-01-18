<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 * @var yii\widgets\ActiveForm $form
 */

?>
<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
        'id' => 'JenisPembayaran',
        'layout' => 'horizontal',
        'enableClientValidation' => true,
        'errorSummaryCssClass' => 'error-summary alert alert-error',
    ]
);
?>

<?= $form->field($model, 'id')->textInput() ?>
<?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'panjang_digit')->passwordInput(['maxlength' => true]) ?>
<?= $form->field($model, 'kategori_id')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
<hr/>

<?php echo $form->errorSummary($model);?>
<div class="row">
    <div class="col-md-offset-3 col-md-10">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success']); ?>
        <?= Html::a('<i class="fa fa-chevron-left"></i> Kembali', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
</div>
</div>
