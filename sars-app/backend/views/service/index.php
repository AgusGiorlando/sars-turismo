<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use kartik\icons\Icon;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            // 'id',
            'price',
            'version',
            'enabled',
            //'images',
            //'description:ntext',
            //'observations:ntext',
            //'includes',
            //'duration',
            //'languages:ntext',
            //'type',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        //						throw new \Exception(serialize($model));
                        $url = Url::to(['view', 'id' => $model->id]);
                        $updateButton = Html::a('VER', $url, [
                            'title' => "ver",
                            'class' => 'btn btn-link',
                        ]);
                        return $updateButton;
                    },
                ],
                'visibleButtons' => [
                    "view" => true,
                ]
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
