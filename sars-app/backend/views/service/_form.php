<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\base\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Nombre') ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price', ['inputOptions' => ['value' => Yii::$app->formatter->asDecimal($model->price)]])->label('Precio')?>
    
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'observations')->textarea(['rows' => 6])
                ->hint('Disponibilidad: Jueves y Domingos.;Mínimo 2 pasajeros / Máximo 23 pasajeros.')?> 

    <?= $form->field($model, 'includes')->textarea(['rows' => 6])
                    ->hint('["Transporte ida y vuelta y guía profesional bilingüe.", "Parada técnica para almorzar y realizar actividades opcionales."]')?> 

    <?= $form->field($model, 'images', ['inputOptions' => ['value' => 'Images']])->textInput()
            ->hint('{"main": "canon01.jpg", "carrousel": ["unnamed.jpg", "Valle-Grande-Mendoza.jpg"]}')?>

    <?= $form->field($model,'duration',['inputOptions' => ['value' => \Yii::$app->formatter->asTime($model->duration, 'short')]]) ?>

    <?= $form->field($model, 'languages')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
