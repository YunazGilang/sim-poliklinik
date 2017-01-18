<?php

use yii\helpers\Html;

$this->title='Rumah Sakit' . $model->nama . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label'=> 'Rumah Sakit', 'url'=>['index']];
$this->params['breadcrumbs'][] = ['label'=> (string)$model->nama, 'url'=>['view', 'id'=>$model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<p>
    <?= Html::a('<i class="fa fa-eye-open"></i> Lihat', ['view','id' =>$model->id], ['class' => 'btn btn-default']) ?>
</p>
<?php echo $this->render('_form', ['model'=>$model,]);
?>
