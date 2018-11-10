
<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Imagini';
$this->params['breadcrumbs'][] = $this->title;
?>
<script>

// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<div class="imagini-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Imagini', ['create'], ['class' => 'btn btn-success']) ?>
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

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
  
      <?php 
        foreach ($listaImagini as $imagine) {?>
    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
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
      <p id="caption"></p>
    </div>


  </div>
</div>
