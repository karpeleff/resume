<?php

use app\assets\AssetBundle;
use yii\helpers\Html;



$assets = AssetBundle::register($this);

/* @var $this \yii\web\View */
/* @var $content string */


AssetBundle::register($this);


$this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?= Yii::$app->charset ?>"/>s
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/a4e584b747.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.nselect.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>>

<?php $this->endPage() ?>




