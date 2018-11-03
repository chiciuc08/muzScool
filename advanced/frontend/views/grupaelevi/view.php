<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GrupaElevi */

$this->title = $model->grupa_elevi_id;
$this->params['breadcrumbs'][] = ['label' => 'Grupa Elevis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupa-elevi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->grupa_elevi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->grupa_elevi_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'grupa_elevi_id',
            'grupa_elevi_nume',
            'grupa_elevi_responsabilID',
            'grupa_elevi_anIncepere',
            'grupa_elevi_anFinisare',
        ],
    ]) ?>

</div>
