<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html as Bootstrap4Html;

$this->title = $oService->name;

$activeFlag = true;

$oCategory = $oService->getCategory()->one();

// Calcula el ancho de las imagenes dentro de la galeria en funcion de su cantidad
$column_size = 100 / (count($images) - 1);

?>
<div class="site-service">
    <section id="service" class="service">
        <div class="container" data-aos="fade-up">
            <h1 class="activity-title" id="activity"><?= Html::encode($this->title) ?></h1>
            <div class="row text-center">
                <div class="price-box">
                    <h2>AR$ <?= $oService->price ?></h2>
                </div>
            </div>
            <hr>
            <!-- DETALLES -->
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="detail">Salidas</span><br><?= $oService->start ?>
                </div>
                <div class="col-md-4">
                    <span class="detail">Regreso</span><br><?= $oService->return ?>
                </div>
                <div class="col-md-4">
                    <span class="detail">Tipo de Actividad</span><br><?= $oCategory->name ?>
                </div>
            </div>
            <hr>
            <br>
            <!-- INCLUYE -->
            <div class="row">
                <div class="col-md-4">
                    <h3>Incluye</h3>
                    <ul class="list-group">
                        <?php foreach (json_decode($oService->includes) as $item) : ?>
                            <li class="list-group-item d-flex align-items-center"><i class="bx bx-check-square"></i><?= Bootstrap4Html::encode($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>No incluye</h3>
                    <ul class="list-group">
                        <?php foreach (json_decode($oService->not_includes) as $item) : ?>
                            <li class="list-group-item d-flex align-items-center"> <i class="bx bx-x-circle"></i><?= Bootstrap4Html::encode($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- RECOMENDACIONES -->
                <div class="col-md-4">
                    <h3>Recomendaciones</h3>
                    <?php foreach (json_decode($oService->observations) as $item) : ?>
                        <li class="list-group-item d-flex align-items-center"><i class="bx bx-radio-circle"></i><?= Bootstrap4Html::encode($item) ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <br>
        </div>
        <div class="container" data-aos="fade-up">
            <hr>
            <div class="row">
                <!-- GALERIA -->
                <div class="col-md-6">
                    <div class="row">
                        <img class="cover-img" src="<?= '/img/services/' . $oService->id . '/' . $images[0]->filename ?>" onclick="openModal();currentSlide(1)">
                    </div>
                    <div class="row gallery">
                        <?php for ($index = 1; $index < count($images); $index++) : ?>
                            <div class="column" style="--column-size: <?= $column_size ?>%;">
                                <img src="<?= '/img/services/' . $oService->id . '/' . $images[$index]->filename ?>" onclick="openModal();currentSlide(<?= $index + 1 ?>)" class="hover-shadow">
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- DESCRIPCION -->
                    <div class="text-center">
                        <p><?= $oService->description ?></p>
                    </div>
                </div>
            </div>
            <!-- RESERVA -->
            <div class="row booking">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adultos (+18)</label><br>
                        <input type="number" id="adultsNum" min="1" data-bind="value:adultsNum" value="1"/>
                    </div>
<!--                     
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="button" class="btn btn-success btn-lg align-center" onclick="sendWspMessage()">Reserva por whatsapp</button>
                </form>
            </div>
            <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    <?php foreach ($images as $image) : ?>
                        <div class="mySlides">
                            <?= Html::img('/img/services/' . $oService->id . '/' . $image->filename, ['width' => '100%']); ?>
                        </div>
                    <?php endforeach; ?>
                    <!-- Next/previous controls -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
        </div>
        <br>

    </section>
</div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
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
        console.log(n);
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

    function sendWspMessage() {
        contactNumber = 5492612189550;

        let activity = '<?= $oService->name ?>';
        let adultsNum = document.getElementById("adultsNum").value;

        text = `Hola! Quisera reservar para el tour ${activity}. Somos ${adultsNum} adultos`;
        var encoded_text = encodeURIComponent(text);

        var win = window.open(`https://wa.me/${contactNumber}?text=${encoded_text}`, '_blank');
    }
</script>