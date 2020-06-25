<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

    <footer class="footer">
        &copy; My Company <?= date('Y') ?>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

<div id="menu-back" class="menu-back" onclick="hideMenu()"></div>
<div id="menu" class="menu">
    <div class="menu-title">Меню</div>
    <div class="menu-item" onclick="selectMenuItem(event)" data-link="#home"><img src="/web/icons/home.svg" alt=""></div>
    <div class="menu-item" onclick="selectMenuItem(event)" data-link="#why">Почему</div>
    <div class="menu-item" onclick="selectMenuItem(event)"  data-link="#home">qwerty</div>
    <div class="menu-item">Записаться на курс</div>
</div>


<div class="modal fade" id="pipecModal" tabindex="-1" role="dialog" aria-labelledby="pipecModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    </div>
  </div>
</div>