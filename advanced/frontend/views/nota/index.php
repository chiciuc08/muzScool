<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Catalog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nota-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
    foreach ($listaClaseActive as $grupa) 
        {
        echo Html::a($grupa->grupa_elevi_nume, ['note', 'idClasa'=>$grupa->grupa_elevi_id], ['class' => 'btn btn-success']);
        }

?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ora_id',
            'ora_idElev',
            'ora_idProfesor',
            'ora_idDisciplina',
            'ora_nrSala',
            //'nota',
            //'ora_data',
            //'ora_anInvatamint',
            //'ora_semestru',
            //'ora_descriere',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
