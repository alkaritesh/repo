<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="sidebar-mini layout-boxed skin-yellow-light">
<?php $this->beginBody() ?>

<div class="container">

    <header class="main-header">

        <!-- Logo -->
        <a href="index.php?r" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>ERP</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>School</b>ERP</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->

            <!-- Navbar Right Menu -->


        </nav>
    </header>
    <div class="content-wrapper" style="margin-left: 0px;">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 10%;">


        <?= Alert::widget() ?>
        <?= $content ?>


        </div>
     </div>
    <footer class="main-footer" style="margin-left: 0px;">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://google.com/+riteshsingh1">Ritesh Singh</a>.</strong> All rights reserved.
    </footer>






</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
