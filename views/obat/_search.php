<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ObatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'kemasan_id') ?>

    <?= $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'harga_satuan') ?>

    <?php // echo $form->field($model, 'harga_gflk') ?>

    <?php // echo $form->field($model, 'is_utama') ?>

    <?php // echo $form->field($model, 'stok_saat_ini') ?>

    <?php // echo $form->field($model, 'stok_gflk') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
