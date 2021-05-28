<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use kartik\icons\Icon;

$this->title = $oService->name;
$activeFlag = true;
?>
<div class="site-service">
    <section id="service" class="service">
        <div class="container" data-aos="fade-up">
            <h1 class="activity-title"><?= Html::encode($this->title) ?></h1>
            <div class="row h-75">
                <!-- CAROUSEL -->
                <div class="col-6 d-flex align-items-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($images as $image) : ?>
                                <?php if ($activeFlag == true) :  $activeFlag = false; ?>
                                    <div class="carousel-item active">
                                    <?php else : ?>
                                        <div class="carousel-item">
                                        <?php endif; ?>
                                        <img class="d-block carousel-img" src='<?= '/img/services/' . $oService->id . '/' . $image->filename ?>' alt="First slide">
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                        </div>
                    </div>
                    <!-- DESCRIPCION -->
                    <div class="col-6">
                        <p><?= $oService->description ?></p>
                        <h3 class="price">Desde AR$<?= $oService->price ?></h3>
                    </div>
                </div>
                <hr>
                <!-- RESERVA -->
                <div class="row align-center">
                    <div class="card text-center w-100">
                        <div class="card-body contact-card">
                            HACE TU RESERVA<br>
                            <?php echo Icon::show('phone') . ' ' . Yii::$app->params['contactPhoneNumber']; ?><br>
                            <?php echo Icon::show('envelope') . ' ' . Yii::$app->params['contactEmail']; ?><br>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- DETALLES -->
                <div class="row text-center">
                    <div class="col 4">
                        <span class="detail">Duración</span><br><?= Yii::$app->formatter->asTime($oService->duration, 'short') ?>hs
                    </div>
                    <div class="col 4">
                        <span class="detail">Cancelación</span><br>2 dias antes
                    </div>
                    <div class="col 4">
                        <span class="detail">Tipo de Actividad</span><br><?= $oService->type ?>
                    </div>
                </div>
                <hr>
                <!-- INCLUYE -->
                <div class="container">
                    <h2>Incluye</h2>
                    <?php foreach ($oService->includes as $item) : ?>
                        <?php echo Icon::show('check-circle') ?> <?= $item ?> <br>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>
</div>