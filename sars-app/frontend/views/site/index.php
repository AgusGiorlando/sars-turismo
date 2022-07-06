<?php

use yii\bootstrap4\Html as Bootstrap4Html;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'SARS Turismo';
?>
<div class="site-index">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="align-items-center">
    <!-- CAROUSEL -->
    <div data-aos="fade-up">
      <div id="homeCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="150">
            <img class="d-block w-100 carousel-img " src="/img/site/home-carousel/carousel_1.jpg">
          </div>
          <div class="carousel-item" data-bs-interval="150">
            <img class="d-block w-100 carousel-img" src="/img/site/home-carousel/carousel_2.jpg">
          </div>
          <div class="carousel-item" data-bs-interval="150">
            <img class="d-block w-100 carousel-img" src="/img/site/home-carousel/carousel_3.jpg">
          </div>
          <div class="carousel-item" data-bs-interval="150">
            <img class="d-block w-100 carousel-img" src="/img/site/home-carousel/carousel_4.jpg">
          </div>
          <div class="carousel-item" data-bs-interval="150">
            <img class="d-block w-100 carousel-img" src="/img/site/home-carousel/carousel_5.jpg">
          </div>
          <div class="carousel-item" data-bs-interval="150">
            <img class="d-block w-100 carousel-img" src="/img/site/home-carousel/carousel_6.jpg">
          </div>
          <div class="carousel-item" data-bs-interval="150">
            <img class="d-block w-100 carousel-img" src="/img/site/home-carousel/carousel_7.jpg">
          </div>
        </div>
        <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!--TOURS PROMOCIONADOS-->
    <div class="activities-menu" data-aos="fade-up">
      <div class="row row-orange d-flex justify-content-center">
        <div class="col-md-2 d-flex category">
          <div class="row d-flex justify-content-center">
            <div class="icon"><img src='/img/site/services-logos/SARS _2_.jpg' class="activities-logo"> </div>
            <h2>Combos</h2>
          </div>
        </div>
        <div class="col-sm-2 icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><img src='/img/site/home/home2.jpg' class="activities-img"> </div>
          <h4><?= Bootstrap4Html::a('MENDOZA CLASICA', Url::to(['service/view', 'id' => '9a8be6b3-065a-3ce2-9ff9-4d4ecdd130c3']), ['class' => 'title']); ?></h4>
          <span>AR$ 12000</span>
        </div>
        <div class="col-sm-2 icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><img src='/img/site/home/home2.jpg' class="activities-img"> </div>
          <h4><?= Bootstrap4Html::a('MENDOZA EXPRESS', Url::to(['service/view', 'id' => 'af53895d-6d09-3e29-a2c3-381d21242e8a']), ['class' => 'title']); ?></h4>
          <span>AR$ 6800</span>
        </div>
        <div class="col-sm-2 icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><img src='/img/site/home/home2.jpg' class="activities-img"> </div>
          <h4><?= Bootstrap4Html::a('MENDOZA NATURAL', Url::to(['service/view', 'id' => '3aa0bb36-53c1-300f-9bb1-e854a086d782']), ['class' => 'title']); ?></h4>
          <span>AR$ 7000</span>
        </div>
        <div class="col-sm-2 icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><img src='/img/site/home/home2.jpg' class="activities-img"> </div>
          <h4><?= Bootstrap4Html::a('MENDOZA AVENTURA', Url::to(['service/view', 'id' => '2ec187b3-6e7c-3c16-a6a0-49bcf69b942f']), ['class' => 'title']); ?></h4>
          <span>AR$ 15000</span>
        </div>
      </div>
    </div>
</div>
</section><!-- End Hero -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>
</div>