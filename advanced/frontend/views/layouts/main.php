<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
   <?php $this->beginBody() ?>
    
<div class="wrap">
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><?= Html::a('Activitati', ['/noutati/index'], ['class' => ''])?></li>
      <li class="active"><?= Html::a('Istoric', ['/site/about'], ['class' => ''])?></li>
      <li class="active"><?= Html::a('Galerie', ['/site/galerie'], ['class' => ''])?></li>
      <li class="active"><?= Html::a('Video', ['/site/video'], ['class' => ''])?></li>
      <li class="active"><?= Html::a('Contact', ['/site/contact'], ['class' => ''])?></li>
      <li class="active"><?php if (!Yii::$app->user->isGuest){echo Html::a('Note', ['/nota/index'], ['class' => '']);}?></li>
      <li class="active"><?php if (!Yii::$app->user->isGuest){echo  Html::a('Orar', ['/ora/index'], ['class' => '']);}?></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <?php 
        if (Yii::$app->user->isGuest) {?>
            <li><?= Html::a('<span class="glyphicon glyphicon-user"></span> Sign Up', ['/site/signup'], ['class' => ''])?></li>
            <li><?= Html::a('<span class="glyphicon glyphicon-log-in"></span> Login', ['/site/login'], ['class' => ''])?></li>
         <?php           
        }else{?>
            <li>
               <?php echo Html::beginForm(['/site/logout'], 'post').
                    '<button type="submit" class="btn btn-link logout">Iesi&nbsp;'.Yii::$app->user->identity->username.'</button>'
                       .Html::endForm()?>
                       
            </li>
            <?php
           }
      ?>
      
    </ul>
  </div>
</nav>    
    
    <div class="container">
        <div class="well well-lg">
        <!--<img src="http://safiisanatos.ro/wp-content/uploads/2014/05/baroc.jpg" />-->
      
        <?= $content ?>
        </div>
    </div>
</div>

<footer class="footer">
    
    
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
        
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
