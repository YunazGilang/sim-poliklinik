<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\User $model
*/

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">
        <?php echo $this->render('_form', [
            'model' => $model,
        ]); ?>
    </div>
</div>