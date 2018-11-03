<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GrupaElevi */

$this->title = 'Create Grupa Elevi';
$this->params['breadcrumbs'][] = ['label' => 'Grupa Elevis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupa-elevi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
