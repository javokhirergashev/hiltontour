<!--OUR-EVENTS-->
<section class="events">
    <div class="container">
        <h2 class="events-title"><?= Yii::t("app", "category")?></h2>
        <div class="line"></div>
        <div id="events-v2" class="owl-carousel owl-theme">
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php
                        $img = app\models\StaticFunctions::getImage('tours_category', $model->id, $model->images);
                    ?>
                    <div class="item ">
                <div class="events-item">
                    <div class="events-img"><img src="<?=$img?>" class="img-responsive" alt="Image"></div>
                    <div class="events-content">
                        <a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>" title="">
                            <h3 class="sky-h3"><?=$model['name_'.Yii::$app->language];?></h3>
                        </a>
                    </div>
                </div>
            </div>
                <?php endforeach;?>
            <?php endif;?>

        </div>
    </div>
</section>
<!-- END / OUR EVENTS -->