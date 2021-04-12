<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */


use yii\helpers\Html;
use kartik\icons\Icon;

$this->title = 'SARS Turismo';

$imgUrl = Yii::getAlias('@webroot/img/site/logo.jpg');
?>
<div>
    <section id="coming-soon" class="coming-soon">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">En construcción</h1>
                <p class="lead">Estamos trabajando en nuestro nuevo sitio web...Pronto estará listo!</p>
                <hr class="my-2 text-center">
                <p class="lead text-center">
                    <?php echo Icon::show('phone') . ' ' . Yii::$app->params['contactPhoneNumber']; ?><br>
                    <?php echo Icon::show('envelope') . ' ' . Yii::$app->params['contactEmail']; ?><br> <br>
                    <a href="<?= Yii::$app->params['instagramUrl'] ?>" class="instagram"><i class="bx bxl-instagram bx-md"></i></a>
                    <a href="<?= Yii::$app->params['facebookUrl'] ?>" class="facebook"><i class="bx bxl-facebook bx-md"></i></a>
                </p>
            </div>
        </div>
        <div class="logo">
                <?= Html::img('/img/site/logo.jpg', ['class' => 'img']); ?>
        </div>

</div>