<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\nota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ora_idElev')->textInput() ?>

    <?= $form->field($model, 'ora_idProfesor')->textInput() ?>

    <?= $form->field($model, 'ora_idDisciplina')->textInput() ?>

    <?= $form->field($model, 'ora_nrSala')->textInput() ?>

    <?= $form->field($model, 'nota')->textInput() ?>

    <?= $form->field($model, 'ora_data')->textInput() ?>

    <?= $form->field($model, 'ora_anInvatamint')->textInput() ?>

    <?= $form->field($model, 'ora_semestru')->textInput() ?>

    <?= $form->field($model, 'ora_descriere')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
