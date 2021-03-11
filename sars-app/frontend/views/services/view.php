<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;

$this->title = 'Aconcagua';
?>
<div class="site-service">
    <section id="service" class="service">
        <div class="container" data-aos="fade-up">
            <h1><?= Html::encode($this->title) ?></h1>
            <div class="row h-75">
                <!-- CAROUSEL -->
                <div class="col-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block carousel-img" src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Aconcagua2016.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block carousel-img" src="https://ca-times.brightspotcdn.com/dims4/default/f8bb0f5/2147483647/strip/true/crop/1472x882+0+0/resize/840x503!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2Fd4%2F83%2F209b026547e590cf6a00cd240e63%2Fscreen-shot-2019-09-28-at-6.03.49%20PM.png" alt="Third slide">
                            </div>
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
                    <h2>Descripción</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente asperiores ad voluptatum eaque voluptates quia, sint officia? Itaque amet quia minima ipsa, quae hic necessitatibus, veritatis placeat neque blanditiis ab!</p>
                    <h3 class="price">Desde AR$500</h3>
                    <!-- RESERVA -->
                </div>
            </div>
            <hr>
            <div class="row align-center">
                <div class="card text-center w-100">
                    <div class="card-body contact-card">
                        HACE TU RESERVA<br>
                        <?php echo FA::icon('mobile'); ?> 2612543287 <br>
                        <?php echo FA::icon('envelope'); ?> reservas@sarsturismo.com.ar <br>
                    </div>
                </div>
            </div>
            <hr>
            <!-- DETALLES -->
            <div class="row text-center">
                <div class="col 4">
                    <span class="detail">Duración</span><br>8hs
                </div>
                <div class="col 4">
                    <span class="detail">Cancelación</span><br>2 dias antes
                </div>
                <div class="col 4">
                    <span class="detail">Tipo de Actividad</span><br>Alpinismo
                </div>
            </div>
            <hr>
            <!-- INCLUYE -->
            <div class="container">
                <h2>Incluye</h2>
                <?php echo FA::icon('thumbs-up'); ?> Bicicleta personal y casco <br>
                <?php echo FA::icon('thumbs-up'); ?> Agua mineral <br>
                <?php echo FA::icon('thumbs-up'); ?> Seguro personal
            </div>
        </div>
    </section>
</div>