<style>
    .dropbtn {
        background-color: #63AC45;
        color: white;
        padding: 13px;
        font-size: 15px;
        font-weight: 600;
        border: none;
        border-radius: 7px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;transition: all ease 1s;}

    .dropdown:hover .dropdown-content {display: block;transition: all ease 1s; }

    .dropdown:hover .dropbtn {background-color: #29323c;
    transition: all ease 1s;
    }
</style>
<!--====== Start Header ======-->
<header class="header-area transparent-header">
    <!--=== Header Navigation ===-->
    <div class="header-navigation navigation-two navigation-white">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <!--=== Primary Menu ===-->
            <div class="primary-menu">
                <!--=== Site Branding ===-->
                <div class="site-branding">
                    <a href="/" style="width: 110px;" class="brand-logo"><img src="/frontend-files/images/logo/logo.png" alt="Site Logo"></a>
                </div>
                <!--=== Nav Inner Menu ===-->
                <div class="nav-menu">
                    <!--=== Mobile Logo ===-->
                    <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                        <a href="/" class="brand-logo"><img src="/frontend-files/images/logo/logo.png" alt="Site Logo"></a>
                    </div>
                    <!--=== Nav Search ===-->
                    <!--=== Main Menu ===-->
                    <nav class="main-menu">
                        <ul>
                            <?php if (!empty($menues)): ?>
                                <?php foreach ($menues as $menue): ?>
                                     <li class="menu-item"><a href="<?=$menue->link?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                                <?php endforeach;?>
                            <?php endif;?>
                        </ul>
                    </nav>
                    <!--=== Nav Button ===-->
                    <div class="menu-button mt-40 d-xl-none">
                        <a href="<?=\yii\helpers\Url::to(["admin/"])?>" class="main-btn btn-green"Login<i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
                <!--=== Nav right Item ===-->
                <div class="nav-right-item d-flex align-items-center">
                    <div class="menu-button d-xl-block d-none">
                        <a href="<?=\yii\helpers\Url::to(["admin/"])?>" class="main-btn btn-green">Login<i class="far fa-angle-double-right"></i></a>
                    </div>
                    <div class="lang-dropdown">
                        <div class="dropdown">
                            <button class="dropbtn"><?= Yii::t("app", "lang")?></button>
                            <div class="dropdown-content">
                                <?php
                                foreach (Yii::$app->params['language'] as $key => $value){
                                    echo " <a style='font-color:black' href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."'>".$value."</a>";
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="navbar-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--====== End Header ======-->
<!--====== Start Banner Section ======-->
<section class="banner-section">
    <div class="hero-wrapper-two">
        <div class="hero-slider-two">
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url(/frontend-files/images/hero/slider1.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-10">
                            <div class="hero-content text-white text-center">
                                <h1 data-animation="fadeInUp" data-delay=".6s"><?= Yii::t("app", "slider1")?></h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url(/frontend-files/images/hero/slider2.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-10">
                            <div class="hero-content text-white text-center">
                                <h1 data-animation="fadeInUp" data-delay=".6s"><?= Yii::t("app", "slider2")?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!--====== End Banner Section ======-->