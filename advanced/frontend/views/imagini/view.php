<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Imagini */

$this->title = $model->imagini_id;
$this->params['breadcrumbs'][] = ['label' => 'Imaginis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imagini-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->imagini_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->imagini_id], [
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
            'imagini_id',
            'imagini_nume',
            'imagini_adresa',
            'createdBy',
            'created_at',
            'updatedBy',
            'updated_at',
        ],
    ]) ?>

</div>
