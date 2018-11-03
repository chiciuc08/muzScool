<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GrupaElevi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupa-elevi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grupa_elevi_nume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grupa_elevi_responsabilID')->textInput() ?>

    <?= $form->field($model, 'grupa_elevi_anIncepere')->textInput() ?>

    <?= $form->field($model, 'grupa_elevi_anFinisare')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
