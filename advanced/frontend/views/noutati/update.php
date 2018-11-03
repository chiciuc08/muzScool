<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Noutati */

$this->title = 'Modificare Activitate';

?>
<div class="noutati-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
