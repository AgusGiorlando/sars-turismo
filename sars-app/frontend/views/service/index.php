<?php

/* @var $this yii\web\View */

use yii\bootstrap4\Html;
$this->title = 'Actividades';
?>
<div class="site-services">
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <h1 class="section-title"><?= Html::encode($this->title) ?></h1>

            <div class="row">
                <?php foreach ($aServices as $item) :
                    $imgUrl = Yii::getAlias('@web/img/' . $item->id . '/' . $item->images['main']);
                ?>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="50">
                        <div class="icon-box">
                            <?= Html::img($imgUrl, ['class' => 'img']); ?>
                            <h4 class="title"><?= Html::a($item->name, ['service/view', 'id' => $item->id]) ?></h4>
                            <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
                            desde<h1 class="price">AR$<?= $item->price ?></h1>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>