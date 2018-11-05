<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Noutati */

$this->title = $model->noutati_titlu;
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h4><?=$model->noutati_titlu?></h4></div>
            <div class="panel-body"><?=$model->noutati_text?></div>
            <div class="panel-footer"> 
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
            </div>
        </div>
    </div>
</div>

