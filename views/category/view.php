<section class="gallery-section pt-90">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <h2><?= Yii::t("app", "category1")?> <span class="thin"><?= Yii::t("app", "category2")?></span></h2>
                </div>
            </div>
        </div>
        <div class="gallery-slider-one wow fadeInUp">
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php
                    $img = app\models\StaticFunctions::getImage('tours_category', $model->id, $model->images);
                    ?>
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="<?=$img?>" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content text-center text-white">
                                    <a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                    <h4 class="title"><a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>"><?=$model['name_'.Yii::$app->language];?></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section><!--====== End Gallery Section ======-->

<section class="cta-section dark-green-bg pt-70 pb-35">
    <div class="container">
        <div class="cta-wrapper bg_cover" style="background-image: url(/frontend-files/images/bg/cta-bg-1.png);">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title text-white mb-40 wow fadeInLeft">
                        <h2><?= Yii::t("app", "cta")?></h2>
                    </div>
                </div>
                <div class="col-lg-5">

                </div>
            </div>
        </div>
    </div>
</section><!--====== End CTa Section ======-->