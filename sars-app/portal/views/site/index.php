<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'SARS Portal';

$nowDate = new DateTime();
?>
<div class="site-index">
    <h1>Mapa</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.951268580529!2d-69.01833968507106!3d-32.52744845812002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDMxJzM4LjgiUyA2OcKwMDAnNTguMSJX!5e0!3m2!1ses!2sar!4v1630525422429!5m2!1ses!2sar" width="100%" height="400px" allowfullscreen="" loading="lazy"></iframe>
    <h1>Tiempo</h1>
    <div class="report-container">
        <h5><?php echo $data->timezone; ?></h5>
        <div class="row">
            <div class="col-4">
                <div class="card border-primary" style="border-radius:5%;">
                    <div><?= $nowDate->format('d/m') ?></div>
                    <div><?php echo ucwords($data->current->weather[0]->description); ?></div>
                    <div class="weather-forecast">
                        <img src="http://openweathermap.org/img/wn/<?php echo $data->current->weather[0]->icon; ?>@2x.png" class="weather-icon" />
                    </div>
                    <div><?php echo $data->current->temp; ?>°C</div>

                </div>
            </div>
            <div class="col-4">
                <div class="card border-primary" style="border-radius:5%;">
                    <div>
                        <?php
                        $nowDate->modify('+1 day');
                        echo $nowDate->format('d/m');
                        ?>
                    </div>
                    <div><?php echo ucwords($data->daily[0]->weather[0]->description); ?></div>
                    <div class="weather-forecast">
                        <img src="http://openweathermap.org/img/wn/<?php echo $data->daily[0]->weather[0]->icon; ?>@2x.png" class="weather-icon" />
                    </div>
                    <div><?php echo $data->daily[0]->temp->day; ?>°C</div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-primary" style="border-radius:5%;">
                    <div>
                        <?php
                        $nowDate->modify('+1 day');
                        echo $nowDate->format('d/m');
                        ?>
                    </div>
                    <div><?php echo ucwords($data->daily[1]->weather[0]->description); ?></div>
                    <div class="weather-forecast">
                        <img src="http://openweathermap.org/img/wn/<?php echo $data->daily[1]->weather[0]->icon; ?>@2x.png" class="weather-icon" />
                    </div>
                    <div><?php echo $data->daily[1]->temp->day; ?>°C</div>
                </div>
            </div>
        </div>

    </div>
</div>