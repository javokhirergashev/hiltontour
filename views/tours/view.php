<!-- OUR-ROOMS-->
<section class="rooms">
    <div class="container">
        <h2 class="title-room"><?= Yii::t("app", "tours")?></h2>
        <div class="outline"></div>
        <div class="wrap-rooms">
            <div class="row">
                <div id="rooms" class="owl-carousel owl-theme">

                    <div class="item ">
                        <?php if (!empty($models)): ?>
                            <?php foreach ($models as $model): ?>
                                <?php
                                $img = \app\models\StaticFunctions::getImage('tours', $model->id, $model->images);
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="<?=$img?>" class="img-responsive"
                                                 alt="PLuxury Room" title="Luxury Room">
                                        </div>
                                        <div class="rooms-content">
                                            <h4 class="sky-h4"><?=$model['title_'.Yii::$app->language];?></h4>
                                            <p class="price"><?=$model->price?> UZS</p>
                                            <a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>" class="btn btn-room">Batafsil</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        <?php  endif;?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</section>
<!-- END / ROOMS -->