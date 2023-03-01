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
        "https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900",
        "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800",
        "https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900",
        "css/font-awesome.min.css",
        "css/ionicons.min.css",
        "css/owl.carousel.min.css",
        "css/gallery.css",
        "css/vit-gallery.css",
        "images/favicon.png",
        "css/bootstrap-select.min.css",
        "cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css",
        "css/styles.css",
        ];
    public $js = [
        "js/jquery-1.12.4.min.js",
        "js/owl.carousel.min.js",
        "js/bootstrap.min.js",
        "js/vit-gallery.js",
        "js/jquery.countTo.js",
        "js/jquery.appear.min.js",
        "js/isotope.pkgd.min.js",
        "js/bootstrap-select.js",
        "js/jquery.littlelightbox.js",
        "../../../../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js",
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4",
        "js/sky.js",
        "js/form.js",
    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
