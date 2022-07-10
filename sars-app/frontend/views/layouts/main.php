<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\MainAsset;
use frontend\assets\MenuAsset;
use common\widgets\Alert;
use kartik\icons\Icon;
use yii\helpers\Url;
use buttflattery\multimenu\MultiMenu;

MainAsset::register($this);
MenuAsset::register($this);
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

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '551858156557860');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=551858156557860&ev=PageView
&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

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
        <?php
        $items = [
            [
                'label' => 'TRADICIONALES',
                'url' => 'javascript:void(0)',
                'items' => [
                    ['label' => 'Alta Montaña', 'url' =>  Url::to(['service/view', 'id' => 'af53895d-6d09-3e29-a2c3-381d21242e8a'])],
                    ['label' => 'Alta Montaña por Villavicencio', 'url' =>  Url::to(['service/view', 'id' => '59c04ac5-4910-3951-8557-c78e52cf841c'])],
                    ['label' => 'Bodega 1/2 dia Tradicional', 'url' =>  Url::to(['service/view', 'id' => 'd62c66ef-e3e4-35c8-9a8b-40d83d234c12'])],
                    ['label' => 'Cañón de Atuel', 'url' =>  Url::to(['service/view', 'id' => '3aa0bb36-53c1-300f-9bb1-e854a086d782'])],
                    ['label' => 'City Tour', 'url' =>  Url::to(['service/view', 'id' => '9a8be6b3-065a-3ce2-9ff9-4d4ecdd130c3'])],
                    ['label' => 'Villavicencio', 'url' =>  Url::to(['service/view', 'id' => 'f3f7d803-c98a-3ade-bf2f-6dbfcc2462f5'])],
                    ['label' => 'Parque Acuatico Cacheuta', 'url' =>  Url::to(['service/view', 'id' => 'ccd5af14-1c86-3359-9708-25e20edc66dc'])],
                    ['label' => 'Hotel Spa Termas de Cacheuta', 'url' =>  Url::to(['service/view', 'id' => '535b85c7-0f11-398c-8bda-4666b46dd564'])],
                    ['label' => 'Valle de Uco', 'url' =>  Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                    ['label' => 'Villavicencio', 'url' =>  Url::to(['service/view', 'id' => 'f3f7d803-c98a-3ade-bf2f-6dbfcc2462f5'])],
                ]
            ],
            [
                'label' => 'INNOVADORAS',
                'url' => 'javascript:void(0)',
                'items' => [
                    ['label' => 'Arte & Naturaleza “Parque de las Artes Marañón”', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                    ['label' => 'Walking City Tour', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                    ['label' => 'La gesta del vino', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                    ['label' => 'Ciudad fantasmal de Paramillos', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                    ['label' => 'Winebeetle', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                    ['label' => 'Cerro Aconcagua “Trekking & Paisajismo”', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                    ['label' => 'Valle de Uco alta gama “Catedrales del Vino”', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                    ['label' => 'Valle de Uco “Cordón del Plata por Vallecitos y La Carrera”', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                    ['label' => 'Villavicencio Park', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                ]
            ],
            [
                'label' => 'ENOTURISMO, GASTRONOMIA & MARIDAJES',
                'url' => 'javascript:void(0)',
                'items' => [
                    [
                        'label' => 'Bodegas',
                        'url' => 'javascript:void(0)',
                        'items' => [
                            ['label' => 'Bodegas medio dia', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Bodegas premium', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Experiencias en bodega Santa Julia & Olivicola Zuccardi', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Malbec alta gama', 'url' =>  Url::to(['service/view', 'id' => '17ec7d2c-ff84-3bda-887b-e2c56e2fe8e3'])],
                            ['label' => 'La gesta del vino', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Valle de Uco', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Valle de Uco alta gama', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Cooking class para niños en bodega Santa Julia & Olivicola Zuccardi', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Valle de Uco “Cordón del Plata por Vallecitos y La Carrera” ', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Experiencias en bodega Vistalba', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                        ]
                    ],
                    [
                        'label' => 'Restaurantes',
                        'url' => 'javascript:void(0)',
                        'items' => [
                            ['label' => 'Almuerzos & Cenas en restaurantes de bodegas', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Almuerzos & Cenas en restaurantes centricos', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Sunsets', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                        ]
                    ],
                    [
                        'label' => 'Otros',
                        'url' => 'javascript:void(0)',
                        'items' => [
                            ['label' => 'Bike por los viñedos', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Cabalgata por los Viñedos en Bodega Renacer', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Entre viñedos y olivos', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                            ['label' => 'Winebeetle', 'url' =>  Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                        ]
                    ],
                ],
            ],
            [
                'label' => 'NATURALEZA & AVENTURA',
                'url' => 'javascript:void(0)',
                'items' => [
                    [
                        'label' => 'AGUA',
                        'url' => 'javascript:void(0)',
                        'items' => [
                            ['label' => 'Rafting Rio Mendoza', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Rafting Cerro Negro', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Kayak de travesia dique Potrerillos', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Kayak full day dique Potrerillos', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Kayak half day estación aforadora Rio Mendoza', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Stand Up Paddle circuito Potrerillos', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                        ]
                    ],
                    [
                        'label' => 'AIRE',
                        'url' => 'javascript:void(0)',
                        'items' => [
                            ['label' => 'Parapente', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Vuelo en Globo “VIÑEDOS y MONTAÑAS 360”', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Paracaidismo', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Canopy base Potrerillos', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Canopy adrenalina lago Potrerillos', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Arborismo  Cacheuta', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                            ['label' => 'Villavicencio Park', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                        ]
                    ],
                    [
                        'label' => 'TIERRA',
                        'url' => 'javascript:void(0)',
                        'items' => [
                            [
                                'label' => 'Trekking',
                                'url' => 'javascript:void(0)',
                                'items' => [
                                    ['label' => 'Cerro Aconcagua “Trekking & Paisajismo”', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                                    ['label' => 'Trekking full day Cerro Cabras', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Trekking full day Cerro Arenales', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Trekking con RAPPEL Cascada de la Quebrada del Salto', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Trekking sin RAPPEL Cascada de la Quebrada del Salto o Cerro Cocodrilo', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Trekking circuito trasandino', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                ]
                            ],
                            [
                                'label' => 'Cabalgata',
                                'url' => 'javascript:void(0)',
                                'items' => [
                                    ['label' => 'Cabalgata atardecer', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Cabalgata criolla', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Cabalgata medio dia', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Cabalgata luna llena', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Cabalgata full day', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Cabalgata por los viñedos Bodega Renacer', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                ]
                            ],
                            [
                                'label' => 'Escalada',
                                'url' => 'javascript:void(0)',
                                'items' => [
                                    ['label' => 'Escalada en roca full day', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Escalada en roca medio dia', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                ]
                            ],
                            [
                                'label' => 'Bike',
                                'url' => 'javascript:void(0)',
                                'items' => [
                                    ['label' => 'Bike por los Viñedos', 'url' => Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f'])],
                                    ['label' => 'Winebeetle', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Mountain Bike Rucahue Potrerillos', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                    ['label' => 'Mountain Bike en los valles de Potrerillos', 'url' => Url::to(['service/view', 'id' => 'f78d155f-4a30-3553-8f7b-291b5d71f038'])],
                                ]
                            ]
                        ]
                    ],
                ],
                'linkOptions' => ['class' => 'institution']
            ],
            [
                'label' => 'COMBOS',
                'url' => 'javascript:void(0)',
                'items' => [
                    ['label' => 'Mendoza Clásica', 'url' => Url::to(['combo/view', 'id' => '18f0365b-ff17-11ec-a227-2cd05ae0e569'])],
                    ['label' => 'Mendoza Express', 'url' => Url::to(['combo/view', 'id' => '18f0365b-ff17-11ec-a227-2cd05ae0e569'])],
                    ['label' => 'Mendoza Natural', 'url' => Url::to(['combo/view', 'id' => '18f0365b-ff17-11ec-a227-2cd05ae0e569'])],
                    ['label' => 'Mendoza Aventura', 'url' => Url::to(['combo/view', 'id' => '18f0365b-ff17-11ec-a227-2cd05ae0e569'])],
                    ['label' => 'Vino Mendoza', 'url' => Url::to(['combo/view', 'id' => '18f0365b-ff17-11ec-a227-2cd05ae0e569'])],
                    ['label' => 'Mendoza Premium', 'url' => Url::to(['combo/view', 'id' => '18f0365b-ff17-11ec-a227-2cd05ae0e569'])],
                ],
            ],
            [
                'label' => 'INSTITUCIONAL',
                'url' => 'javascript:void(0)',
                'items' => [
                    ['label' => 'Sobre Nosotros', 'url' => Url::to(['/site/about'])],
                    ['label' => 'Condiciones Generales', 'url' => Url::to(['/site/conditions'])],
                ],
                'linkOptions' => ['class' => 'institution']
            ],
        ];

        echo MultiMenu::widget(
            [
                'activeCssClass' => '',
                'items' => $items,
                'layoutTemplate' => '{multimenu}',
                'enableIcons' => false,
                'brandUrl' => false,
                'brandLabel' => '',
                'activateParents' => false,
                'containerCssClasses' => 'menu-custom',
                'multimenuOptions' => [
                    'mobileView' => true,
                    'enableWavesPlugin' => false,
                    'mobileBreakPoint' => 720,
                    //Tema
                    'theme' => MultiMenu::THEME_BIGDROP,
                    'themeColorFile' => \frontend\assets\MenuAsset::class,
                    'enableTransitionEffects' => true,
                    'transitionEffect' => 'zoomInRight',
                    'transitionDelay' => 'slower',
                ],
            ]
        );

        ?>
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