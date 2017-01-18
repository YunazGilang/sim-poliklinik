<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Menu $model
 */

$this->title = 'Update Menu - ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Menu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="box box-info">
    <div class="box-body">
        <?php echo $this->render('_form', [
            'model' => $model,
        ]); ?>
    </div>
</div>