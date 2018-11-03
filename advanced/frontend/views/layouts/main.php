<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
    <?php
    NavBar::begin([
        'brandLabel' => "",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Activitati', 'url' => ['/noutati/index']],
        ['label' => 'Istoric', 'url' => ['/site/about']],
        ['label' => 'Galerie', 'url' => ['/site/galerie']],
        ['label' => 'Video', 'url' => ['/site/video']],
        ['label' => 'Contact', 'url' => ['/site/contact']],        
        ['label' => 'Despre Noi', 'url' => ['/site/about']],
        
    ];
    
    
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup'], 'class' =>'pull-right'];
        $menuItems[] = ['label' => 'Logare', 'url' => ['/site/login'], 'class' =>'pull-right'];
    } else {
        array_push($menuItems, ['label'=>'Note', 'url' =>['/nota/index']]);
        array_push($menuItems, ['label'=>'Orar', 'url' =>['/ora/index']]);
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Iesi (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav '],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    
    <div class="container">
        <img src="/layouts/dreamstime.jpg" width="100%"/>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
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
