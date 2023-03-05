<!--====== Start Footer ======-->
<footer class="footer-default dark-black-bg text-white">
    <div class="container">

        <div class="footer-widget-area pt-80 pb-30">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget about-company-widget mb-40 wow fadeInDown">
                        <a href="index-2.html" class="footer-logo"><img src="/frontend-files/images/logo/logo.png" alt="Brand Logo"></a>
                        <p><?= Yii::t("app", "about2")?></p>
                    </div>
                </div> <div class="col-xl-2 col-lg-4 col-md-6">

                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="footer-widget footer-nav-widget pl-lg-20 mb-40 wow fadeInDown">
                        <h4 class="widget-title"><?= Yii::t("app", "menulinks")?></h4>
                        <div class="footer-nav-content">
                            <ul class="footer-nav">
                                <?php if(!empty($menues)):?>
                                    <?php foreach ($menues as $menue):?>
                                <li><a href="<?=$menue->link;?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">

                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">

                </div>
            </div>
        </div>
        <!--=== Copyright Area ===-->
        <div class="copyright-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <P>&copy; 2023 <span style="color:#F7921E;">Webspace</span>, All Rights Reserved</P>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright-nav float-lg-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--====== End Footer ======-->