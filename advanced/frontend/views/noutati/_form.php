<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Noutati */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noutati-form">
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas()});
  //]]>
  </script>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noutati_titlu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noutati_text')->textarea(['rows' => 6]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
