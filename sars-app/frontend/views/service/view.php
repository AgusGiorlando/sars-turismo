<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\Html as Bootstrap4Html;
// use slavkovrn\lightbox\LightBoxWidget;


$this->title = $oService->name;

$activeFlag = true;

$oCategory = $oService->getCategory()->one();

$cover_img_src = '/img/services/' . $oService->id . '/' . 'cover.jpeg';

// Mensaje a enviar por Whatsapp
$wp_message = sprintf('Hola! Quisera reservar para el tour %s', $oService->name);
?>
<div class="site-service">
    <section id="service" class="service">
        <div class="container" data-aos="fade-up">
            <h1 class="activity-title"><?= Html::encode($this->title) ?></h1>
            <div class="row">
                <img class="cover-img" src="<?= $cover_img_src ?>">
            </div>
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
            <div class="row justify-content-center">
                <!-- GALERIA -->
                <?= \slavkovrn\lightbox\LightBoxWidget::widget([
                    'id'     => 'lightbox',  // id of plugin should be unique at page
                    'class'  => 'galary',    // class of plugin to define style
                    'height' => '0px',     // height of image visible in widget
                    'width' => '0px',      // width of image visible in widget
                    'images' => [],
                ]);
                ?>
                <?php for ($index = 0; $index < count($images); $index++) : ?>
                    <?php if ($images[$index]['src'] != $cover_img_src) :  ?>
                        <a href="<?= $images[$index]['src'] ?>" data-lightbox="galeria"><img src="<?= $images[$index]['src'] ?>" class="hover-shadow"></a>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
            <hr>
            <div class="row">
                <!-- DESCRIPCION -->
                <div class="text-center">
                    <p><?= $oService->description ?></p>
                </div>
            </div>
        </div>
        <!-- RESERVA -->
        <div class="container" data-aos="fade-up">
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
</div>
<br>

</section>
</div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<script>
    function sendWspMessage() {
        contactNumber = <?= Yii::$app->params['contactPhoneNumber'] ?>;

        let activity = '<?= $oService->name ?>';
        let adultsNum = document.getElementById("adultsNum").value;
        let kidsNum = document.getElementById("kidsNum").value;

        text = `Hola! Quisiera reservar para el tour ${activity}. Somos ${adultsNum} adultos y ${kidsNum} niños.`;
        var encoded_text = encodeURIComponent(text);

        var win = window.open(`https://wa.me/${contactNumber}?text=${encoded_text}`, '_blank');
    }
</script>