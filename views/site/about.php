<?php

/* @var $this yii\web\View */
use miloschuman\highcharts\Highcharts;
use yii\helpers\Html;

$this->title = 'Biz haqimizda';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-breadcrumb">
    <div class="container">
        <a href=""><i class="fa fa-home"></i> <?=$this->title = 'Home'?></a> <i class="fa fa-angle-right"></i>
        <span> <?=$this->title = $abouts->getTitle()?></span>
    </div>
</div>
<!-- Breadcrumb section end -->


<!-- About section -->
<section class="about-section spad pt-0">
    <div class="container">
        <div class="section-title text-center">
            <h3><?=$abouts->getTitle()?></h3>
            </div>
        <div class="row">
            <div class="col-lg-6 about-text">

                     <ul class="about-list">
                    <p> <?=$abouts->getContent()?> </p>
                </ul>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <img src="/upload/global/english_faculty_1.jpg" alt="" style="margin-bottom: 10px">
                <img src="/upload/global/2.jpg" alt="">
                        </div>
        </div>
        <div class="col-lg-12">
            <?php $masters = Yii::t('yii', 'Master\'s');
            $bachelors= Yii::t('yii', 'Bachelor\'s');
            $chairses= Yii::t('yii', 'Chairs');
            ?>
            <?php  echo Highcharts::widget([
                'options' => [
                        'chart' => [
                'type' => 'bar'
                    ],
                    'title' => ['text' => 'Kontingent'],
                    'xAxis' => [
                        'categories' => [2018, 2019, 2020]
                    ],
                    'yAxis' => [
                        'title' => ['text' => 'Soni']
                    ],
                    'series' => [
                        ['name' => $bachelors, 'data' => [120, 150, 170]],
                        ['name' => $masters, 'data' => [20, 35, 50]]
                    ]
                ]
            ]);
            ?>
        </div>
        <div class="col-lg-12">
            <?php  echo Highcharts::widget([
                'options' => [
                    'chart' => [
                        'type' => 'bar'
                    ],
                    'title' => ['text' => $chairses],
                    'xAxis' => [
                        'categories' => [2018, 2019, 2020]
                    ],
                    'yAxis' => [
                        'title' => ['text' => 'Soni']
                    ],
                    'series' => [
                        ['name' => $chairses, 'data' => [3, 4, 5]],
                                          ]
                ]
            ]);
            ?>
        </div>
           </div>
</section>
<!-- About section end-->


<!-- Testimonial section  -->
<section class="testimonial-section spad">
    <div class="container">
        <?=app\widgets\Chairs::widget();?>
    </div>
</section>
<!-- Testimonial section end -->


<!-- Team section  -->
<section class="team-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3><?=Yii::t('yii', 'Administration of faculty')?></h3>
            <p><?=Yii::t('yii', 'Dean and Deputy Deans of the Faculty')?></p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="member">
                    <div class="member-pic set-bg" data-setbg="/img/rahbariyat/Anvar_Rustamovich.jpg">
                        <div class="member-social">
                            <a href=""><i class="fa fa-facebook fa-3x"></i></a>
                            <a href=""><i class="fa fa-telegram fa-3x"></i></a>
                              </div>
                    </div>
                    <h5>Ismoilov Anvar Rustamovich</h5>
                    <p><?=Yii::t('yii', 'Dean of the faculty')?></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="member">
                    <div class="member-pic set-bg" data-setbg="/img/rahbariyat/Behzod_Yakubovich.jpg">
                        <div class="member-social">
                            <a href=""><i class="fa fa-facebook fa-3x"></i></a>
                            <a href=""><i class="fa fa-telegram fa-3x"></i></a>
                        </div>
                    </div>
                    <h5>Po’latov Behzod Yakubovich</h5>
                    <p><?=Yii::t('yii', 'Deputy dean')?></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="member">
                    <div class="member-pic set-bg" data-setbg="/img/rahbariyat/Ergashev_Mirsaid.jpg">
                        <div class="member-social">
                            <a href=""><i class="fa fa-facebook fa-3x"></i></a>
                            <a href=""><i class="fa fa-telegram fa-3x"></i></a>
                        </div>
                    </div>
                    <h5>Ergashev Mirsaid</h5>
                    <p><?=Yii::t('yii', 'Deputy dean')?></p>
                </div>
            </div>
                    </div>
    </div>
</section>
<!-- Team section end -->