<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Imagini */

$this->title = 'Create Imagini';
$this->params['breadcrumbs'][] = ['label' => 'Imaginis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imagini-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
