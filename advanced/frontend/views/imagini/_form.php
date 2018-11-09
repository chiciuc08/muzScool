<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Imagini */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imagini-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imagini_nume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagini_adresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updatedBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
