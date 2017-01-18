<?php

use dmstr\helpers\Html;
use yii\widgets\DetailView;
use dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 */

$this->title = 'JenisPembayaran ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'JenisPembayaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = [
    'label' => (string)$model->name, 
    'url' => ['view', 'id' => $model->id]
];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud jenispembayaran-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit', 
                ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'Tambah Baru', 
                ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p class="pull-right">
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . 'Daftar JenisPembayaran', 
                ['index'], ['class' => 'btn btn-default']) ?>
    </p>

    <div class="clearfix"></div>

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <div class="box box-info">
        <div class="box-body">
            <?php $this->beginBlock('app\models\JenisPembayaran'); ?>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'nama',
                    'panjang_digit',
                    'kategori_id',
                    'status',
                ],
            ]); ?>

            <hr/>

            <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', 
                    ['delete', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
                    'data-method' => 'post',
                ]); ?>
            <?php $this->endBlock(); ?>



            <?= Tabs::widget(
                [
                    'id' => 'relation-tabs',
                    'encodeLabels' => false,
                    'items' => [[
                        'label' => '<b class=""># ' . $model->id . '</b>',
                        'content' => $this->blocks['app\models\User'],
                        'active' => true,
                    ],]
                ]
            );
            ?>
        </div>
    </div>
</div>
