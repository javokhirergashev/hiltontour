<!-- HEADER -->
<header class="header-sky">
    <div class="container">
        <!--HEADER-TOP-->
        <div class="header-top">
            <div class="header-top-left">
                <span><i class="ion-ios-location-outline"></i> Uzbekistan, Namangan region, Namangan city,  Uychi street 1</span>
                <span><i class="fa fa-phone" aria-hidden="true"></i> 90-551-13-00</span>
                <span><a style="color: white" href="<?=\yii\helpers\Url::to(['admin/'])?>"><i style="margin-left: 550px"  class="fa fa-sign-in" aria-hidden="true"></i></a></span>
            </div>
            <div class="header-top-right">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ENG <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            foreach (Yii::$app->params['language'] as $key => $value){
                                echo " <li><a href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."'>".$value."</a></li>";
                            }
                            ?>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- END/HEADER-TOP -->
    </div>
    <!-- MENU-HEADER -->
    <div class="menu-header">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar "></span>
                        <span class="icon-bar "></span>
                        <span class="icon-bar "></span>
                    </button>
                    <a class="navbar-brand" href="file:///E:/Xampp/htdocs/skyline/index.html" title="Skyline"><img src="frontend-files/images/Home-1/logo.png" alt="#"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(!empty($menues)):?>
                            <?php foreach ($menues as $menue): ?>
                                <li><a href="<?=$menue->link?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- END / MENU-HEADER -->
</header>
<!-- END-HEADER -->
<!-- SLIDER -->
<section class="section-slider height-v">
    <div id="index12" class="owl-carousel  owl-theme">
        <div class="item">
            <img alt="Third slide" src="frontend-files/images/Home-1/Slider-v1.jpg" class="img-responsive">
            <div class="carousel-caption">
                <h1><?= Yii::t("app", "slider1")?></h1>
                <p><span class="line-t"></span><?= Yii::t("app", "sliders1")?> <span class="line-b"></span></p>
            </div>
        </div>
        <div class="item">
            <img alt="Third slide" src="frontend-files/images/Home-2/Slider-v2.jpg" class="img-responsive">
            <div class="container">
                <div class="carousel-caption ">
                    <h1 class="v2"><?= Yii::t("app", "slider2")?></h1>
                    <p class="p-v2"><span class="line-t"></span><?= Yii::t("app", "sliders2")?><span class="line-b"></span></p>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- END / SLIDER -->