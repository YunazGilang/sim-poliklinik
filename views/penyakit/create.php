<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\User $model
*/

$this->title = 'Tambah Baru';
$this->params['breadcrumbs'][] = ['label' => 'Penyakit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('Kembali', \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>    
</p>

<?=
    $this->render('_form', [
	'model' => $model,
    ]);
?>
