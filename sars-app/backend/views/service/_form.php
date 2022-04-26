<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\base\Service */
/* @var $form yii\widgets\ActiveForm */

$categories = ArrayHelper::map($categories, 'id', 'name');

?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Nombre') ?>

    <?= $form->field($model, 'type')->dropDownList($categories, ['prompt' => 'Seleccione Uno' ]);?>

    <?= $form->field($model, 'price', ['inputOptions' => ['value' => Yii::$app->formatter->asDecimal($model->price)]])->label('Precio') ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'observations')->textarea(['rows' => 6])->label('Recomendaciones')
        ->hint('Disponibilidad: Jueves y Domingos.;Mínimo 2 pasajeros / Máximo 23 pasajeros.') ?>

    <?= $form->field($model, 'includes')->textarea(['rows' => 6])->label('Incluye')
        ->hint('["Transporte ida y vuelta y guía profesional bilingüe.", "Parada técnica para almorzar y realizar actividades opcionales."]') ?>

    <?= $form->field($model, 'not_includes')->textarea(['rows' => 6])->label('No Incluye')
        ->hint('["Transporte ida y vuelta y guía profesional bilingüe.", "Parada técnica para almorzar y realizar actividades opcionales."]') ?>

    <?= $form->field($model, 'start')->textInput(['maxlength' => false])->label('Salidas') ?>

    <?= $form->field($model, 'return')->textInput(['maxlength' => false])->label('Regreso') ?>

    <?= $form->field($model, 'enabled')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>