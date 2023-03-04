<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend-files';
    public $css = [
        "images/favicon.ico",
        "fonts/flaticon/flaticon.css",
        "fonts/fontawesome/css/all.min.css",
        "vendor/bootstrap/css/bootstrap.min.css",
        "vendor/magnific-popup/dist/magnific-popup.css",
        "vendor/slick/slick.css",
        "vendor/jquery-ui/jquery-ui.min.css",
        "vendor/nice-select/css/nice-select.css",
        "vendor/animate.css",
        "css/default.css",
        "css/style.css",
        ];
    public $js = [
        "../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js",
        "vendor/jquery-3.6.0.min.js",
        "vendor/popper/popper.min.js",
        "vendor/bootstrap/js/bootstrap.min.js",
        "vendor/slick/slick.min.js",
        "vendor/magnific-popup/dist/jquery.magnific-popup.min.js",
        "vendor/isotope.min.js",
        "vendor/imagesloaded.min.js",
        "vendor/jquery.counterup.min.js",
        "vendor/jquery.waypoints.js",
        "vendor/nice-select/js/jquery.nice-select.min.js",
        "vendor/jquery-ui/jquery-ui.min.js",
        "vendor/wow.min.js",
        "js/theme.js",

    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
