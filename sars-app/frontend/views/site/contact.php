<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Contacto';

?>
<div class="site-contact">
    <div class="container" data-aos="fade-up">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
        </p>

        <div class="row">

            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-get-started', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

</div>