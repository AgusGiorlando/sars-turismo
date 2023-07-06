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
			<div id="homeCarousel" class="carousel slide z-depth-1-half" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="150">
						<img class="d-block carousel-img" src="/img/site/home-carousel/carousel_1.jpg">
					</div>
					<div class="carousel-item" data-bs-interval="150">
						<img class="d-block carousel-img" src="/img/site/home-carousel/carousel_2.jpg">
					</div>
					<div class="carousel-item" data-bs-interval="150">
						<img class="d-block carousel-img" src="/img/site/home-carousel/carousel_3.jpg">
					</div>
					<div class="carousel-item" data-bs-interval="150">
						<img class="d-block carousel-img" src="/img/site/home-carousel/carousel_4.jpg">
					</div>
					<div class="carousel-item" data-bs-interval="150">
						<img class="d-block carousel-img" src="/img/site/home-carousel/carousel_5.jpg">
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
			<div class="row d-flex justify-content-center">
				<h1>Combos</h1>
			</div>
			<div class="row row-orange d-flex justify-content-center">
				<div class="col-sm-2 icon-box" data-aos="fade-up" data-aos-delay="100">
					<div class="icon"><img src='/img/site/services-logos/SARS _2_.jpg' class="activities-img"> </div>
					<h4><?= Bootstrap4Html::a('MENDOZA CLASICA', Url::to(['combo/view', 'id' => 'a4481f0f-008f-11ed-896c-005056817490']), ['class' => 'title']); ?></h4>
					<span>AR$ 12000</span>
				</div>
				<div class="col-sm-2 icon-box" data-aos="fade-up" data-aos-delay="100">
					<div class="icon"><img src='/img/site/services-logos/SARS _5_.jpg' class="activities-img"> </div>
					<h4><?= Bootstrap4Html::a('MENDOZA EXPRESS', Url::to(['combo/view', 'id' => 'cbbb47d5-008f-11ed-896c-005056817490']), ['class' => 'title']); ?></h4>
					<span>AR$ 6800</span>
				</div>
				<div class="col-sm-2 icon-box" data-aos="fade-up" data-aos-delay="100">
					<div class="icon"><img src='/img/site/services-logos/SARS _10_.jpg' class="activities-img"> </div>
					<h4><?= Bootstrap4Html::a('MENDOZA NATURAL', Url::to(['combo/view', 'id' => '0f94faa5-0090-11ed-896c-005056817490']), ['class' => 'title']); ?></h4>
					<span>AR$ 7000</span>
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
	<div id="preloader"></div>
</div>