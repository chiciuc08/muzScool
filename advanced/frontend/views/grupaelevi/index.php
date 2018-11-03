<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grupa Elevis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupa-elevi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Grupa Elevi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'grupa_elevi_id',
            'grupa_elevi_nume',
            'grupa_elevi_responsabilID',
            'grupa_elevi_anIncepere',
            'grupa_elevi_anFinisare',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
