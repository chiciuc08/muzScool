<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Imagini */

$this->title = 'Update Imagini: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Imaginis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->imagini_id, 'url' => ['view', 'id' => $model->imagini_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="imagini-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
