<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\MainAsset;
use yii\helpers\Url;
use common\widgets\Alert;
use yii\widgets\Menu;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <?php $this->registerCsrfMetaTags() ?>
    <title>SARS turismo</title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <!-- BEGIN HEADER -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'id' => "mainNav",
                    'class' => 'navbar nav-menu d-lg-block navbar-expand-md',
                ],
                'containerOptions' => [
                    'class' => 'nav-menu'
                ],
            ]);

            echo Menu::widget([
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index'], 'options' => ['class' => "nav-link scrollto"]],
                    ['label' => 'Mendoza', 'url' => ['/site/about'], 'options' => ['class' => "nav-link scrollto"]],
                    ['label' => 'Sobre Nosotros', 'url' => ['/site/contact'], 'options' => ['class' => "nav-link scrollto"]],
                    ['label' => 'Contacto', 'url' => ['/site/contact'], 'options' => ['class' => "nav-link scrollto"]],
                ]
            ]);
            NavBar::end();
            ?>
        </div>
    </header> <!-- END HEADER -->
    <div>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="copyright text-muted">
                <?= Yii::powered() ?> - Copyright &copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?>
            </p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>