<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GrupaElevi */

$this->title = 'Update Grupa Elevi: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Grupa Elevis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->grupa_elevi_id, 'url' => ['view', 'id' => $model->grupa_elevi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grupa-elevi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
