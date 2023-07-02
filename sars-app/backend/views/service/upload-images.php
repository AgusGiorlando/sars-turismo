<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html as Bootstrap4Html;
use yii\helpers\Html;


$this->title = 'Carga de fotos';
?>

<div class="service-image-upload">
    <h1><?= Bootstrap4Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'filename[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->label(false) ?>
    <div class="form-group">
        <?= Bootstrap4Html::submitButton('Cargar', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div> 