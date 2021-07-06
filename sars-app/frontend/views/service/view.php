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
            <!-- GALERIA -->
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <img class="cover-img" src="/img/site/home-carousel/carousel_1.jpg" onclick="openModal();currentSlide(1)">
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="/img/site/home-carousel/carousel_2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
                        </div>
                        <div class="column">
                            <img src="/img/site/home-carousel/carousel_3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
                        </div>
                        <div class="column">
                            <img src="/img/site/home-carousel/carousel_4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
                        </div>
                        <div class="column">
                            <img src="/img/site/home-carousel/carousel_5.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
                        </div>
                    </div>
                </div>
                <!-- The Modal/Lightbox -->
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <img src="/img/site/home-carousel/carousel_1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="/img/site/home-carousel/carousel_2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="/img/site/home-carousel/carousel_3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="/img/site/home-carousel/carousel_4.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="/img/site/home-carousel/carousel_5.jpg" style="width:100%">
                        </div>

                        <!-- Next/previous controls -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
                <!-- DESCRIPCION -->
                <div class="col-6">
                    <p><?= $oService->description ?></p>
                    <h3 class="price d-flex align-self-bottom">Desde AR$<?= $oService->price ?></h3>
                </div>
            </div>
        </div>
        <hr>
        <!-- DETALLES -->
        <div class="row text-center">
            <div class="col 4">
                <span class="detail">Duración</span><br>2 Horas
            </div>
            <div class="col 4">
                <span class="detail">Cancelación</span><br>2 dias antes
            </div>
            <div class="col 4">
                <span class="detail">Tipo de Actividad</span><br><?= $oService->type ?>
            </div>
        </div>
        <br>
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
</div>
</section>
</div>

<script>
    // Open the Modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>