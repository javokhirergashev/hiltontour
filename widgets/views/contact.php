<!--====== Start Contact Section ======-->
<section class="contact-bg-section bg_cover pt-100 pb-50" style="background-image: url(frontend-files/images/bg/contact-bg-1.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-12">
                <div class="contact-content-box mb-50">
                    <div class="section-title mb-45 wow fadeInUp">
                        <h2><span class="thin"><?= Yii::t("app", "contact1")?></span></h2>
                    </div>
                    <?php if (!empty($models)):?>
                        <?php foreach ($models as $model):?>
                             <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-icon-box mb-50 wow fadeInDown">
                                            <div class="icon">
                                                <i class="fal fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title"><?= Yii::t("app", "location")?></h4>
                                                <p><?=$model->addres?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-icon-box mb-50 wow fadeInDown">
                                            <div class="icon">
                                                <i class="fal fa-envelope-open"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title"><?= Yii::t("app", "email")?></h4>
                                                <p><a href=""><?=$model->email?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-icon-box mb-50 wow fadeInDown">
                                            <div class="icon">
                                                <i class="fal fa-phone"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title"><?= Yii::t("app", "tel")?></h4>
                                                <p>+123456789</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-icon-box mb-50 wow fadeInDown">
                                            <div class="icon">
                                                <i class="fal fa-link"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title"><?= Yii::t("app", "subscribe")?></h4>
                                                <p>hiltontour.uz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php endforeach;?>
                    <?php endif;?>

                </div>
            </div>
            <div class="col-xl-5 col-lg-12">
                <div class="col-lg-12">
                    <div class="adventure-form-content-box pt-95 pb-95 pr-lg-70 wow fadeInLeft">
                        <div class="section-title mb-35">
                            <h2><?= Yii::t("app", "contactp")?></h2>
                        </div>
                        <div class="accommodation-form">
                            <div class="form_group">
                                <input type="text" class="form_control " placeholder="<?= Yii::t("app", "name")?>" id="name">
                            </div>
                            <div class="form_group">
                                <input type="email" class="form_control " placeholder="Email" id="email">
                            </div>
                            <div class="form_group">
                                <input type="tel" class="form_control" placeholder="<?= Yii::t("app", "tel")?>" name="text" id="phone">
                            </div>
                            <div class="form_group">
                                <input type="date" class="form_control" name="text" id="date">
                            </div>
                            <div class="form_group">
                                <select class="wide" id="select">
                                    <option data-display="<?= Yii::t("app", "tours")?>"></option>
                                    <?php if(!empty($tours)):?>
                                        <?php foreach ($tours as $tour):?>
                                            <option><?=$tour["title_".Yii::$app->language];?></option>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </select>
                            </div>
                            <div class="form_group">
                                <button onclick="booking()" class="main-btn btn-green"><?= Yii::t("app", "send")?><i class="far fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Section ======-->