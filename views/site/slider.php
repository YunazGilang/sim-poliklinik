<?php
/* @var $this yii\web\View */
?>

<div class="master-slider ms-skin-default" id="masterslider">
    <div class="ms-slide">
        <img src="<?= \yii\helpers\Url::to(["css/blank.gif"]) ?>" data-src="<?= \yii\helpers\Url::to(["css/slider.png"]) ?>" alt="lorem ipsum dolor sit"/>
    </div>
    <div class="ms-slide">
        <img src="<?= \yii\helpers\Url::to(["css/blank.gif"]) ?>" data-src="<?= \yii\helpers\Url::to(["css/slider.png"]) ?>" alt="lorem ipsum dolor sit"/>
    </div>
    <div class="ms-slide">
        <img src="<?= \yii\helpers\Url::to(["css/blank.gif"]) ?>" data-src="<?= \yii\helpers\Url::to(["css/slider.png"]) ?>" alt="lorem ipsum dolor sit"/>
    </div>
</div>

<?php $this->registerJs('

var slider = new MasterSlider();
slider.setup(\'masterslider\' , {
    width:800,
    height:430,
    fullwidth:true,
    space:5,
    view:"basic",
    autoHeight:true
});
slider.control(\'arrows\');
slider.control(\'bullets\' , {autohide:false});
slider.control(\'scrollbar\' , {dir:\'h\'});


'); ?>