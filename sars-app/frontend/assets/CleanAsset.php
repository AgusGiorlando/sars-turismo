<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CleanAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../themes/startbootstrap-clean-blog-gh-pages';

    public $css = [
        'vendor/font-awesome/css/font-awesome.min.css',
        '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
        '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'css/clean-blog.min.css'
    ];
    public $js = [
        'js/clean-blog.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
