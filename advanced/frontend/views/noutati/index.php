<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Activitati';

?>
<div class="row">
   
    
    <div class="col-md-1">
        <?php 
        if (!Yii::$app->user->isGuest&& Yii::$app->user->can('createPost')) {
            echo Html::a('Nou <span class="glyphicon glyphicon-plus"></span>', ['create'], ['class' => 'btn btn-lg btn-success']);
        }
        ?>
    </div>
<div class="col-md-10"><h2 class=" text-center"> <?= Html::encode($this->title) ?></h2></div>
    <div class="col-md-1"></div>
       
        <div class="col-md-12">
            <?php foreach ($noutati as $articol) {?>
                
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4><?=$articol->noutati_titlu?></h4></div>
                        <div class="panel-body"><?=$articol->noutati_text?></div>
                        <div class="panel-footer"><?= Html::a("Detalii", ['view', 'id'=>$articol->noutati_id], ['class' => 'btn btn-info '])?></div>
                    </div>

                

            <?php } ?>

        </div>

    </div>

