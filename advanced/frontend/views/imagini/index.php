<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Imagini';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imagini-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Imagini', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row"> 
        <?php 
        foreach ($listaImagini as $imagine) {?>
        <div class="col-md-3"><?=Html::img (Yii::$app->request->baseUrl."/imagini/".$imagine->imagini_nume,['class' => 'img-responsive img-thumbnail'])?></div>
         <?php  
        }
        ?>
    </div>

</div>
