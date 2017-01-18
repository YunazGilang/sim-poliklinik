<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
            'id' => 'Rumah Sakit',
            'layout'=>'horizontal',
            'enableClientValidation'=>true,
            'errorSummaryCssClass'=>'error-summary alert alert-error']);
        ?>
        <?= $form->field($model,'id')->textInput() ?>
        <?= $form->field($model,'nama')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model,'alamat')->textInput(['maxlength'=>true]) ?>
        <hr/>
        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="col-md-offset-3 col-md-10">
                <?= Html::submitButton('<i class="fa fa-save"></i> Simpan',['class'=>'btn btn-success']) ?>
                <?= Html::a('<i class="fa fa-chevron-left"></i> Kembali',['index'], ['class'=>'btn btn-default']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
