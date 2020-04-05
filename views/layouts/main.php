<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\components\LanguageWidget;
use yii\helpers\Html;
use yii\helpers\Url;
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
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="preloder">
    <div class="loader"></div>
</div>

<!-- header section -->
<header class="header-section">
    <div class="container">
        <!-- logo -->
        <a href="<?=Yii::$app->homeUrl?>" class="site-logo"><img src="/web/img/English_1.png" alt=""></a>

        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <div class="header-info">

            <div class="hf-item">


            </div>
        </div>
    </div>
</header>
<!-- header section end-->


<!-- Header section  -->
<nav class="nav-section">
    <div class="container">
        <div class="nav-right">
            <?= LanguageWidget::widget()?>
            </div>
        <?php $action=Yii::$app->controller->action->id;?>
        <ul class="main-menu">
            <li class="<?=($action==Yii::$app->homeUrl)?'active':''?>"><a href="<?=Yii::$app->homeUrl?>"><?=Yii::t('yii','Home')?></a></li>
            <li class="<?=($action=='news')?'active':''?>"><a href="<?=Url::to(['site/news'])?>"><?=Yii::t('yii','News')?></a></li>
            <li class="<?=($action=='about')?'active':''?>"><a href="<?=Url::to(['site/about'])?>"><?=Yii::t('yii','About')?></a></li>
            <li class="<?=($action=='chairs')?'active':''?>"><a href="<?=Url::to(['site/chairs'])?>"><?=Yii::t('yii','Chairs')?></a></li>

        </ul>
    </div>
</nav>
<!-- Header section end -->

<?=$content?>


<!-- Footer section -->
<footer class="footer-section">
    <div class="container footer-top">
        <div class="row">
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <div class="about-widget">
                    <img src="/web/img/English_1_footer.png" alt="">
                    <p><?=Yii::t('yii','Follow us on social media')?></p>
                    <div class="social pt-1">
                        <a href=""><i class="fa fa-twitter-square fa-3x"></i></a>
                        <a href=""><i class="fa fa-facebook-square fa-3x"></i></a>
                        <a href=""><i class="fa fa-telegram fa-3x"></i></a>

                    </div>
                </div>
            </div>
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title"><?=Yii::t('yii', 'Pages')?></h6>
                <div class="dobule-link">
                    <ul>
                        <li><a href="<?=Yii::$app->homeUrl?>"><?=Yii::t('yii','Home')?></a></li>
                        <li><a href="<?=Url::to(['site/news'])?>"><?=Yii::t('yii','News')?></a></li>
                        <li><a href="<?=Url::to(['site/about'])?>"><?=Yii::t('yii','About')?></a></li>

                    </ul>
                    <ul>

                    </ul>
                </div>
            </div>
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title"><?=Yii::t('yii', 'USEFUL LINK')?></h6>
                <ul class="recent-post">
                    <li>
                        <p><a style="color: #b7b7b7" href="http://edu.uz/">O'zbekiston Respublikasi Oliy va o'rta maxsus ta'lim vazirligi</a></p>
                    </li>
                    <li>
                        <p><a style="color: #b7b7b7" href="https://dtm.uz/">Davlat test markazi</a></p>
                    </li>
                    <li>
                        <p><a style="color: #b7b7b7" href="https://samdchti.uz/">Samarqand davlat chet tillar instituti</a></p>
                    </li>
                </ul>
            </div>
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title"><?=Yii::t('yii','Contact')?></h6>
                <ul class="contact">
                    <li><p><i class="fa fa-map-marker fa-3x"></i> Samarqand sh, Bo'stonsaroy 93</p></li>
                    <li><p><i class="fa fa-phone fa-3x"></i> +998 66 238-29-37</p></li>
                    <li><p><i class="fa fa-envelope fa-3x"></i> info@samdchti.uz</p></li>
                   </ul>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
