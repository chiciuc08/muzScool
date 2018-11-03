<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Noutati */

$this->title = $model->noutati_titlu;
?>


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
         <?php 
 if (!Yii::$app->user->isGuest&& Yii::$app->user->can('updatePost', ['post' => $model])) {
     echo Html::a('Update', ['update', 'id' => $model->noutati_id], ['class' => 'btn btn-primary']);
     echo Html::a('Delete', ['delete', 'id' => $model->noutati_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);
 }
 ?>
    </p>

    <div class="container">
        
    </div>


