
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
        <?= Html::a('Incarca imagine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row"> 
        <?php 
        $counter = 1;
        foreach ($listaImagini as $imagine) {?>
        <div class="col-md-3"><?=Html::img (Yii::$app->request->baseUrl."/imagini/".$imagine->imagini_nume,['class' => 'img-responsive img-thumbnail','onclick'=>'openModal();currentSlide('.$counter.')' ])?></div>
         <?php 
         $counter++;
        }
        ?>
    </div>

</div>

<!--gallery window-->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
  
      <?php 
        foreach ($listaImagini as $imagine) {?>
    <div class="mySlides">
     
      <?=Html::img (Yii::$app->request->baseUrl."/imagini/".$imagine->imagini_nume,['style' => 'width:100%'])?>
    </div>
       
         <?php  
        }
        ?>
    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
        <?php 
        if(!Yii::$app->user->isGuest){
        echo Html::a('Delete', ['delete', 'id' => $imagine->imagini_id, 'imagine_nume'=>$imagine->imagini_nume], [
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
