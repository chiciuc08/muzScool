<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $grupa->grupa_elevi_nume;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ora-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView:: widget([
        'dataProvider'=>$dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            ['label'=>'Profesor','attribute'=>'profesorNumePrenume'],
            ['label'=>'Disciplina','attribute'=>'disciplinaNume'],
            ['label'=>'Lectia','attribute'=>'lectia'],
            ['label'=>'Data','attribute'=>'dataRo'],
            'ora_nrSala',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
