<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Rumah Sakit';
$this->params['breadcrumbs'][] = $this->title;
?>
<p>

<?= Html::a('<i class="fa fa->plus"></i> Tambah Baru', ['create'],['class' => 'btn btn-success']) ?>

<?php \yii\widgets\Pjax::begin(['id'=>'pjax-main',
    'enableReplaceState'=>false,
    'linkSelector'=>'#pjax-main ul.pagination a, th a'])
?>
<div class="box box-info">
    <div class="box-body">
        <div class="table-responsive">
        <?=GridView::widget([
            'layout'=>'{summary}{pager}{items}{pager}',
            'dataProvider'=>$dataProvider,
            'pager'=>[
                'class'=> yii\widgets\LinkPager::className(),
                'firstPageLabel'=>'First',
                'lastPageLabel'=>'Last'
            ],
            'filterModel'=>$searchModel,
            'tableOptions'=>['class'=>'table table-striped table-bordered tabel-hover'],
            'headerRowOptions'=>['class'=>'x'],
            'columns'=>
                [\app\components\ActionButton::getButtons(),
                    'id',
                    'nama',
                    'alamat'
                ],
        ]); ?>
        </div>
    </div>
</div>
<?php \yii\widgets\Pjax::end() ?>