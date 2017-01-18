<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Obat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kemasan_id')->textInput() ?>

    <?= $form->field($model, 'jenis')->textInput() ?>

    <?= $form->field($model, 'harga_satuan')->textInput() ?>

    <?= $form->field($model, 'harga_gflk')->textInput() ?>

    <?= $form->field($model, 'is_utama')->textInput() ?>

    <?= $form->field($model, 'stok_saat_ini')->textInput() ?>

    <?= $form->field($model, 'stok_gflk')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
