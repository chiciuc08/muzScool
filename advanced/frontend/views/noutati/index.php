<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Activitati';

?>
<div class="row">
    <div class="container"style="background-color: azure">

        <div class="well well-sm"><h2 class="text-center "><?= Html::encode($this->title) ?></h2></div>
 <?php 
 if (!Yii::$app->user->isGuest&& Yii::$app->user->can('createPost')) {
     echo Html::a('Activitate Noua', ['create'], ['class' => 'btn btn-success']);
 }
 ?>
       
        </p
        <div class="container">
            <?php foreach ($noutati as $articol) {?>
                <div class="row">
                    <div class="panel"> <h2 class="text-center"><?=$articol->noutati_titlu?></h2>
                        <div class="panel-body"><?=$articol->noutati_text?></div>
                        <div class = "text-right"><?php echo Html::a("Detalii", ['view', 'id'=>$articol->noutati_id], ['class' => 'btn btn-info '])?></div>
                    </div>

                </div>

            <?php } ?>

        </div>

    </div>
</div>
