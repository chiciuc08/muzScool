<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ora */

$this->title = 'Create Ora';
$this->params['breadcrumbs'][] = ['label' => 'Oras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ora-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
