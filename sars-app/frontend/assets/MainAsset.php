<?php

namespace frontend\assets;

use yii\web\AssetBundle;
/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../themes/main';
    public $publishOptions = ['forceCopy' => true];


    public $css = [
        'lightbox/lightbox.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/icofont/icofont.min.css',
        'vendor/boxicons/css/boxicons.min.css',
        'vendor/owl.carousel/assets/owl.carousel.min.css',
        'vendor/venobox/venobox.css',
        'vendor/aos/aos.css',
        'css/style.css',
    ];
    public $js = [
        'lightbox/lightbox.js',
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery.easing/jquery.easing.min.js',
        'vendor/php-email-form/validate.js',
        'vendor/owl.carousel/owl.carousel.min.js',
        'vendor/isotope-layout/isotope.pkgd.min.js',
        'vendor/venobox/venobox.min.js',
        'vendor/aos/aos.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle'
    ];

}
