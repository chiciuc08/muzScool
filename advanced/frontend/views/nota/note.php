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
    <table class="table table-striped ">
        <thead>
        <th>Elev</th>
        <?php 
        foreach ($oraScolara as $ora) {
            echo "<th>$ora->ora_data</th>";
        }
        ?>
        </thead>
        
    </table>
        <?php 
        foreach ($elevi as $value) {
            echo $value->users_nume.' '.$value->users_prenume.'</br>';
        }
        print_r($listaNote);
        ?>
</div>
