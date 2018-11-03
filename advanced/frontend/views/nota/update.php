<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\nota */

$this->title = 'Update Nota: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Notas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ora_id, 'url' => ['view', 'id' => $model->ora_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
