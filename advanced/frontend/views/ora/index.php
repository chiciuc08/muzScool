<?php

use yii\helpers\Html;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ora-index">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>
        //<?= Html::a('Create Ora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <table class = 'table table-bordered'>
        <tr>
    <?php
     $coloane = 0;
     
        foreach ($listaClaseActive as $grupa) 
        { 
            if($coloane % 3 == 0){
                echo "</tr><tr>";
            }
            echo "<td class = 'col-lg-4'>".Html::a($grupa->grupa_elevi_nume, ['orar', 'idGrupa'=>$grupa->grupa_elevi_id])."</td>";
            $coloane++;
        }
        while($coloane % 3 != 0){
            echo "<td></td>";   
            $coloane++;
        }
        
    ?>
        </tr>
    </table>
    </div>
