<section class="accommodation-section pt-100 pb-100">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <h2><?= Yii::t("app", "hotel1")?></h2>
                </div>
            </div>
        </div>
        <div class="service-slider-one wow fadeInUp">
            <?php if (!empty($models)):?>
                <?php foreach ($models as $model):?>
                <?php $img = app\models\StaticFunctions::getImage('hotel',$model->id,$model->images)?>
                    <div class="single-service-item-four">
                <div class="img-holder">
                    <img src="<?=$img?>" alt="Service Image">
                    <div class="hover-content">
                        <div class="inner-content d-flex justify-content-between">
                            <div class="text">
                                <h4 class="title"><?=$model->name?></h4>
                               <?=$model->country?>
                            </div>
                            <div class="icon">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section><!--====== End Accommodation Section ======-->