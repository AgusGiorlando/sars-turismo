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
                        'class' => 'navbar nav-menu d-sm-block navbar-expand-sm',
                    ],
                    'containerOptions' => [
                        'class' => 'nav-menu'
                    ],
                ]);

                $menuItems = [
                    [
                        'label' => 'ENOTURISMO, GASTRONOMIA & MARIDAJES',
                        'items' => [
                            ['label' => 'Bodegas medio dia', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Bodegas premium', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Malbec alta gama', 'url' => ['service/view', 'id' => '17ec7d2c-ff84-3bda-887b-e2c56e2fe8e3'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'La gesta del vino', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Valle de Uco', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Valle de Uco alta gama', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Valle de Uco “Cordón del Plata por Vallecitos y La Carrera” ', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Bike por los viñedos', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Entre viñedos y olivos', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Experiencias en bodega Vistalba', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Winebeetle', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Experiencias en bodega Santa Julia & Olivicola Zuccardi', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cooking class para niños en bodega Santa Julia & Olivicola Zuccardi', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cabalgata por los Viñedos en Bodega Renacer', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Almuerzos & Cenas en restaurantes de bodegas', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Almuerzos & Cenas en restaurantes centricos', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Sunsets', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                        ]
                    ],
                    [
                        'label' => 'INNOVADORAS',
                        'items' => [
                            ['label' => 'Arte & Naturaleza “Parque de las Artes Marañón”', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Walking City Tour', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'La gesta del vino', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Ciudad fantasmal de Paramillos', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Winebeetle', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cerro Aconcagua “Trekking & Paisajismo”', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Valle de Uco alta gama “Catedrales del Vino”', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Valle de Uco “Cordón del Plata por Vallecitos y La Carrera”', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Villavicencio Park', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                        ]
                    ],
                    [
                        'label' => 'TRADICIONALES',
                        'items' => [
                            ['label' => 'Alta Montaña', 'url' => ['service/view', 'id' => 'af53895d-6d09-3e29-a2c3-381d21242e8a'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Alta Montaña por Villavicencio', 'url' => ['service/view', 'id' => '59c04ac5-4910-3951-8557-c78e52cf841c'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Bodega 1/2 dia Tradicional', 'url' => ['service/view', 'id' => 'd62c66ef-e3e4-35c8-9a8b-40d83d234c12'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cañón de Atuel', 'url' => ['service/view', 'id' => '3aa0bb36-53c1-300f-9bb1-e854a086d782'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'City Tour', 'url' => ['service/view', 'id' => '9a8be6b3-065a-3ce2-9ff9-4d4ecdd130c3'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Villavicencio', 'url' => ['service/view', 'id' => 'f3f7d803-c98a-3ade-bf2f-6dbfcc2462f5'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Parque Acuatico Cacheuta', 'url' => ['service/view', 'id' => 'ccd5af14-1c86-3359-9708-25e20edc66dc'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Hotel Spa Termas de Cacheuta', 'url' => ['service/view', 'id' => '535b85c7-0f11-398c-8bda-4666b46dd564'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Valle de Uco', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Villavicencio', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                        ]
                    ],
                    [
                        'label' => 'NATURALEZA & AVENTURA', 'url' => ['service/index'],
                        'items' => [
                            ['label' => 'Rafting Rio Mendoza', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Rafting Cerro Negro', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Kayak de travesia dique Potrerillos', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Kayak full day dique Potrerillos', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Kayak half day estación aforadora Rio Mendoza', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Stand Up Paddle circuito Potrerillos', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Parapente', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Vuelo en Globo “VIÑEDOS y MONTAÑAS 360”', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Paracaidismo', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Canopy base Potrerillos', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Canopy adrenalina lago Potrerillos', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Arborismo  Cacheuta', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Villavicencio Park', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cerro Aconcagua “Trekking & Paisajismo”', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Bike por los Viñedos', 'url' => ['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Winebeetle', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Trekking full day Cerro Cabras', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Trekking full day Cerro Arenales', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Trekking con RAPPEL Cascada de la Quebrada del Salto', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Trekking sin RAPPEL Cascada de la Quebrada del Salto o Cerro Cocodrilo', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Trekking circuito trasandino', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Escalada en roca full day', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Escalada en roca medio dia', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Mountain Bike Rucahue Potrerillos', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Mountain Bike en los valles de Potrerillos', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cabalgata atardecer', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cabalgata criolla', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cabalgata medio dia', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cabalgata luna llena', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cabalgata full day', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cabalgata por los viñedos Bodega Renacer', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Cabalgata 2', 'url' => ['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'], 'linkOptions' => ['class' => 'nav-dropdown']],
                        ]
                    ],
                    [
                        'label' => 'INSTITUCIONAL', 'url' => ['/site/about'],
                        'items' => [
                            ['label' => 'Sobre Nosotros', 'url' => ['/site/about'], 'linkOptions' => ['class' => 'nav-dropdown']],
                            ['label' => 'Condiciones Generales', 'url' => ['/site/conditions'], 'linkOptions' => ['class' => 'nav-dropdown']],
                        ]
                    ],

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
        <a id="wp-icon" href='https://api.whatsapp.com/send?phone=<?= Yii::$app->params['contactPhoneNumber'] ?>' data-toggle="popover" data-content="Escribinos aqui cualquier consulta..." class="wp-icon" style="display: inline;"><i class="bx bxl-whatsapp"></i></a>
    </div>

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
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover('show');
        $('body').on('click', function(e) {
            $('[data-toggle=popover]').each(function() {
                // hide any open popovers when the anywhere else in the body is clicked
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                    $(this).popover('hide');
                }
            });
        });
    });
</script>