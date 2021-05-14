<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\NavBar;
use frontend\assets\MainAsset;
use common\widgets\Alert;
use kartik\icons\Icon;
use yii\bootstrap4\Nav;

MainAsset::register($this);

Icon::map($this);
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
                // 'brandLabel' => 'BrandLogo',
                // 'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'id' => "mainNav",
                    'class' => 'navbar nav-menu d-lg-block navbar-expand-md',
                ],
                'containerOptions' => [
                    'class' => 'nav-menu'
                ],
            ]);

            $menuItems = [
                [
                    'label' => 'Actividades & Programas', 'url' => ['product/index'],
                    'items' => [
                        ['label' => 'Paseos', 'url' => ['#1'],'linkOptions' => ['class' => 'nav-dropdown']],
                        ['label' => 'Vinos', 'url' => ['#1'],'linkOptions' => ['class' => 'nav-dropdown']],
                        ['label' => 'Naturaleza & Aventura', 'url' => ['#1'],'linkOptions' => ['class' => 'nav-dropdown']],
                        ['label' => 'Malargue', 'url' => ['#1'],'linkOptions' => ['class' => 'nav-dropdown']],
                        ['label' => 'Paquetes', 'url' => ['#1'],'linkOptions' => ['class' => 'nav-dropdown']],
                    ]
                ],
                [
                    'label' => 'Escapadas en Argentina', 'url' => ['product/index'],
                    'items' => [
                        ['label' => 'Norte Argentino', 'url' => ['#1'] ,'linkOptions' => ['class' => 'nav-dropdown']],
                        ['label' => 'Iguazu y alrededores', 'url' => ['#1'],'linkOptions' => ['class' => 'nav-dropdown']],
                        ['label' => 'Sur Argentino', 'url' => ['#1'],'linkOptions' => ['class' => 'nav-dropdown']],
                        ['label' => 'San Juan', 'url' => ['#1'],'linkOptions' => ['class' => 'nav-dropdown']],
                    ],
                ],
                ['label' => 'Sobre Nosotros', 'url' => ['/site/index'], 'options' => ['class' => "nav-link"]],
                ['label' => 'Contacto', 'url' => ['/site/index'], 'options' => ['class' => "nav-link"]],
            ];


            if (count($menuItems)) {
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav'],
                    'items' => $menuItems,
                ]);
            }

            NavBar::end();
            ?>
        </div>

    </header> <!-- END HEADER -->
    <div>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

    <footer class="footer">
        <div class="container d-md-flex py-4">
            <div class="mr-md-auto text-center text-md-left">
                <h4><?= Yii::$app->name; ?></h4>
                <div class="copyright">
                    <?= Yii::powered() ?> - Copyright &copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?>
                </div>
            </div>
            <div class="social-links text-md-right pt-3 pt-md-0">
                <h4>Contacto</h4>
                <?php echo Icon::show('phone') . ' ' . Yii::$app->params['contactPhoneNumber']; ?><br>
                <?php echo Icon::show('envelope') . ' ' . Yii::$app->params['contactEmail']; ?><br>
                <hr>
                <a href="<?= Yii::$app->params['facebookUrl'] ?>" class="facebook"><i class="bx bxl-facebook bx-md"></i></a>
                <a href="<?= Yii::$app->params['instagramUrl'] ?>" class="instagram"><i class="bx bxl-instagram bx-md"></i></a>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>