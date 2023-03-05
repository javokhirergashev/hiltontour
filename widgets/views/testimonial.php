<!--====== Start Feedback Section ======-->
<section class="feedback-section pt-100">
    <div class="container">
        <div class="feedback-wrapper-one">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="feedback-content-box wow fadeInLeft">
                        <div class="section-title mb-45">
                            <h2><?= Yii::t("app", "test_info")?><span class="thin"></span></h2>
                        </div>
                        <div class="testimonial-arrows mb-45"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-wrapper wow fadeInRight">
                        <div class="testimonial-slider-one">
                            <?php if (!empty($models)): ?>
                                <?php foreach ($models as $model):?>
                                     <div class="single-testimonial-item text-center">
                                        <div class="testimonial-content">
                                            <div class="author-title-thumb d-inline-flex">
                                                <div class="author-thumb">
                                                </div>
                                                <div class="author-title">
                                                    <h3 class="title"><?=$model->name?></h3>
                                                    <p class="position"><?=$model->email?></p>
                                                </div>
                                            </div>
                                            <p>      <?=$model['comment_'.Yii::$app->language];?></p>
                                            <ul class="ratings">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                 </div>
                                <?php endforeach;?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Feedback Section ======-->