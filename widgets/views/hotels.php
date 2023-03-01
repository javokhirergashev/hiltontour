<section class="banner-tems text-center">
    <div class="container">
        <div class="banner-content">
            <h2><?= Yii::t("app", "hotels")?></h2>
        </div>
    </div>
</section>
<!-- BODY-ROOM-5 -->
<section class="body-room-5">
    <div class="container">
        <div class="wrap-room-5">
            <div class="row">
                <?php if (!empty($models)): ?>
                    <?php foreach ($models as $model):?>
                    <?php $img = app\models\StaticFunctions::getImage('hotel',$model->id,$model->images)?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="wrap-item ">
                            <div class="img">
                                <img src="<?=$img?>" alt="#" class="img-responsive">
                            </div>
                            <div class="text-room-5">
                                <h2 class="h2-rooms"><?=$model->name?></h2>
                                <h5 class="h5-room"><?=$model->country?></h5>
                            </div>
                            <div class="text-hover">
                                <div class="text">
                                    <h2 style="align-items: center" class="h2-rooms"><?=$model->name?></h2>
                                    <h5 class="h5-room"><?=$model->country?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
<!-- END/BODY-ROOM-5-->