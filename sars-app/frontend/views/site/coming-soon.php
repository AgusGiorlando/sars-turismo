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
        <div class="logo text-center">
            <?= Html::img('/img/site/logo.jpg', ['class' => 'img']); ?>
            <h1 class="title">EN CONSTRUCCIÓN</h1>
            <p class="lead"><b>Estamos trabajando en nuestro nuevo sitio web... <br>Muy pronto estará listo!</b></p>
        </div>
        <div class="container text-center">
            <i class="bx bxl-whatsapp"></i><?php echo ' ' . Yii::$app->params['contactPhoneNumber']; ?><br>
            <?php echo Icon::show('envelope') . ' ' . Yii::$app->params['contactEmail']; ?><br> <br>
            <a href="<?= Yii::$app->params['instagramUrl'] ?>" class="instagram"><i class="bx bxl-instagram bx-md"></i></a>
            <a href="<?= Yii::$app->params['facebookUrl'] ?>" class="facebook"><i class="bx bxl-facebook bx-md"></i></a>
        </div>
</div>