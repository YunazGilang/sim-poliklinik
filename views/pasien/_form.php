<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 * @var yii\widgets\ActiveForm $form
 */

?>

    <div class="box-body">
        <?php $form = ActiveForm::begin([
        'id' => 'Pasien',
        'layout' => 'horizontal',
        'enableClientValidation' => true,
        'errorSummaryCssClass' => 'error-summary alert alert-error',
    ]
);
?>

<?= $form->field($model, 'id')->textInput() ?>
<?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'kode_lama')->passwordInput(['maxlength' => true]) ?>
<?= $form->field($model, 'kode_folder_kk')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'no_indeks_kk')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'puskesmas_id')->textInput() ?>
<?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'dalam_wilayah')->textInput() ?>
<?= $form->field($model, 'tanggal_daftar')->textInput() ?>
<?= $form->field($model, 'nama_kepala_keluarga')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'tanggal_lahir')->textInput() ?>
<?= $form->field($model, 'umur')->textInput() ?>    
<?= $form->field($model, 'umur_bulan')->textInput() ?>
<?= $form->field($model, 'umur_hari')->textInput() ?>    
<?= $form->field($model, 'status_kawin')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'kota')->textInput(['maxlength' => true]) ?>
<hr/>

<?php echo $form->errorSummary($model);?>
<div class="row">
    <div class="col-md-offset-3 col-md-10">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', 
                ['class' => 'btn btn-success']); ?>
        <?= Html::a('<i class="fa fa-chevron-left"></i> Kembali', 
                ['index'], ['class' => 'btn btn-default']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
</div>

