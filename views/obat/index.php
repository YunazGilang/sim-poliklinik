<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ObatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode',
            'nama',
            'kemasan_id',
            'jenis',
            // 'harga_satuan',
            // 'harga_gflk',
            // 'is_utama',
            // 'stok_saat_ini',
            // 'stok_gflk',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
