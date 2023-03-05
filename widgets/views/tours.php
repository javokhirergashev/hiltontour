<!--====== Start Blog Section ======-->
<section class="blog-section pt-90 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <h2><?= Yii::t("app", "tours")?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model):?>
                    <?php
                    $img = app\models\StaticFunctions::getImage('tours', $model->id, $model->images);
                    ?>
                      <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="single-blog-post-bg-item mb-40 wow fadeInUp">
                    <div class="hover-bg bg_cover" style="background-image: url(<?=$img?>);"></div>
                    <div class="entry-content">
                        <a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>" class="cat-btn"><?=$model->price?>UZS</a>
                        <h4 class="title"><a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>"><?=$model['title_'.Yii::$app->language];?></a></h4>
                        <div class="post-author-thumb d-flex align-items-center">
                            <a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>"><?=$model['description_'.Yii::$app->language];?></a>
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li><span><a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>"><i class="far fa-calendar-alt"></i> <?=$model->period?></a></span></li>
                            </ul>
                        </div>
                        <a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>" class="btn-link"><?= Yii::t("app", "more")?><i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section><!--====== End Blog Section ======-->