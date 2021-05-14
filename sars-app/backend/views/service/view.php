<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\base\Service */

$this->title = $model->name;

\yii\web\YiiAsset::register($this);


Html::img(Yii::getAlias('@backend'. '/web/img/3b39507b-8c1c-11eb-8a77-2cd05ae0e569/profile.jpg'));
?>
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Cargar Fotos', ['upload', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                // 'id',
                'enabled:boolean',
                // 'version',
                'name',
                'price',
                // 'images',
                'description:ntext',
                // 'observations:ntext',
                // 'includes',
                'duration',
                'languages:ntext',
                'type',
            ],
        ]) ?>

    <div class="row">
        <?php if (empty($images) == false) : ?>
            <?php foreach ($images as $image) : ?>
                <div class="col-md-3 text-center">
                    <?= Html::img('/img/services/'. $model->id . '/' . $image->filename, ['class' => 'card-mg-top', 'height' => '250px']); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?= $image->filename; ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-md-3">
                <div class="card-body bg-warning">
                    <h5 class="card-title">Ninguna foto cargada</h5>
                </div>
            </div>
    </div>
<?php endif; ?>
</div>