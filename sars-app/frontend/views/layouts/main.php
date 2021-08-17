<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\NavBar;
use frontend\assets\MainAsset;
use common\widgets\Alert;
use kartik\icons\Icon;
use yii\bootstrap4\Nav;
use yii\helpers\Url;

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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title>SARS Turismo</title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <!-- BEGIN HEADER -->
    <header id="header" class="fixed-top">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-7">
                <a href="<?= Url::to(['site/index']) ?> " class="logo"><img src="/img/site/logo.jpg" alt=""></i></a>
                <span class="slogan">Viajá con todos los sentidos</span>
            </div>
            <div class="col-md-3">
                <i class="bx bxl-whatsapp"></i><?php echo ' ' . Yii::$app->params['contactPhoneNumber']; ?><br>
                <?php echo Icon::show('envelope') . ' ' . Yii::$app->params['contactEmail']; ?><br>
            </div>
            <div class="col-md-2">
                <a href="<?= Yii::$app->params['facebookUrl'] ?>" class="social-links"><i class="bx bxl-facebook bx-md"></i></a>
                <a href="<?= Yii::$app->params['instagramUrl'] ?>" class="social-links"><i class="bx bxl-instagram bx-md"></i></a>
                <a href="<?= Yii::$app->params['tripadvisorUrl'] ?>" class="social-links"><i class="fab fa-tripadvisor fa-xs"></i></a>
            </div>
        </div>
        <div class="row nav-menu">
            <div class="container d-flex align-items-center justify-content-between">
                <?php
                NavBar::begin([
                    // 'brandLabel' => Html::img('/img/site/logo.jpg', ['class' => 'logo', 'alt' => Yii::$app->name]),
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
                    ['label' => 'Sobre Nosotros', 'url' => ['/site/about'], 'options' => ['class' => "nav-link"]],
                    [
                        'label' => 'Experiencias en Mendoza', 'url' => ['service/index'],
                        'items' => [
                            ['label' => 'Vinos', 'url' => ['#1'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Paseos', 'url' => ['service/index'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Naturaleza & Aventura', 'url' => ['#1'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'San Rafael', 'url' => ['#1'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Malargue', 'url' => ['#1'], 'linkOptions' => ['class' => 'nav-dropdown']],
                        ]
                    ],
                    [
                        'label' => 'Argentina Tierra de sensaciones', 'url' => ['product/index'],
                        'items' => [
                            ['label' => 'Buenos Aires, La Puerta Grande y los Dominios del Gaucho', 'url' => ['#1'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cuyo, donde nace el vino y vive el Sol', 'url' => ['#1'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Norte, El refugio de las tradiciones y el Arte Precolombino', 'url' => ['#1'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Litoral, la tierra de los grandes rios', 'url' => ['#1'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Patagonia, Entre los Andes y el Atlantico', 'url' => ['#1'], 'linkOptions' => ['class' => 'nav-dropdown']],
                        ],
                    ],
                    ['label' => 'Contacto', 'url' => ['/site/index'], 'options' => ['class' => "nav-link"]],
                ];


                if (count($menuItems)) {
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav'],
                        'items' => $menuItems,
                    ]);
                }
                ?>
                <?php
                NavBar::end();
                ?>
            </div>
        </div>
    </header> <!-- END HEADER -->
    <div>
        <?= Alert::widget() ?>
        <?= $content ?>
        <a id="wp-icon" href='https://api.whatsapp.com/send?phone=<?= Yii::$app->params['contactPhoneNumber'] ?>' data-toggle="popover" data-content="Escribinos aqui cualquier consulta..." class="wp-icon" style="display: inline;"><i class="bx bxl-whatsapp"></i></a>    </div>

    <footer class="footer">
        <section id="footer" class="footer">
            <div class="container d-md-flex py-4">
                <div class="mr-md-auto text-center text-md-left">
                    <h4><?= Yii::$app->name; ?></h4>
                    <div class="copyright">
                        <?= Yii::powered() ?> - Copyright &copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover('show');   
    $('body').on('click', function (e) {
    $('[data-toggle=popover]').each(function () {
        // hide any open popovers when the anywhere else in the body is clicked
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});
});
</script>