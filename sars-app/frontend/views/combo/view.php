<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = $oCombo->name;


?>

<div class="combo-view">
    <section id="combo" class="combo">
        <h1 class="combo-title"><?= Html::encode($this->title) ?></h1>

        <?php foreach ($aServices as $service) : ?>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <h1><?= $service->name ?></h1>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= Html::a('Ir al Tour', Url::to(['service/view', 'id' => $service->id]), ['class' => 'btn btn-combo-service']); ?>

                </div>
                <div class="row">
                    <div class="col-8">
                        <p><?= $service->description ?></p>
                    </div>
                    <div class="col-4 d-flex">
                        <?php
                            $cover_img_src = '/img/services/' . $service->id . '/' . 'cover.jpeg';
                        ?>

                        <div class="icon"><img  src="<?= $cover_img_src ?>" class="combo-service-img"> </div>
                    </div>
                </div>
                <hr>
            </div>
        <?php endforeach; ?>

        
        <!-- RESERVA -->
        <div class="container" data-aos="fade-up">
            <div class="row text-center p-2">
                <div class="price-box">
                    <h2>AR$ <?= $oCombo->price ?></h2>
                </div>
            </div>
            <div class="row booking">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adultos (+18)</label><br>
                        <input type="number" id="adultsNum" min="1" data-bind="value:adultsNum" value="1" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Niños</label><br>
                        <input type="number" id="kidsNum" min="1" data-bind="kidsNum" value="1" />
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
                    <button type="button" class="btn btn-success btn-lg align-center w-100" onclick="sendWspMessage()">Reserva por whatsapp</button>
                </form>
            </div>
        </div>
    </section>
</div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<script>
    function sendWspMessage() {
        contactNumber = <?= Yii::$app->params['contactPhoneNumber'] ?>;

        let activity = '<?= $oCombo->name ?>';
        let adultsNum = document.getElementById("adultsNum").value;
        let kidsNum = document.getElementById("kidsNum").value;

        text = `Hola! Quisiera reservar para el combo ${activity}. Somos ${adultsNum} adultos y ${kidsNum} niños.`;
        var encoded_text = encodeURIComponent(text);

        var win = window.open(`https://wa.me/${contactNumber}?text=${encoded_text}`, '_blank');
    }
</script>