<?php

/* @var $this yii\web\View */

$this->title = 'English 1';

use yii\helpers\Url;
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
use app\models\Post;
?>

<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <?php foreach($sliders as $slider): ?>
            <div class="hs-item set-bg" data-setbg="<?=Yii::$app->homeUrl?>/img/gallery/1.jpg">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle"><?=$slider->category->name?></div>

                                <h2 class="hs-title"><?=mb_substr($slider->getDescription(), 0, 100);?>...</h2>

                                <div class="site-btn"><a href="<?=Url::to(['post/view', 'id'=>$slider->id])?>"><?=Yii::t('yii','READ MORE')?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
</section>
<!-- Hero section end -->


<!-- Counter section  -->
<section class="counter-section">
    <div class="container">
        <?php foreach($elonlar as $elon):?>
        <div class="row">
              <div class="col-lg-7 col-md-6">
                <div class="big-icon">
                    <i class="fa fa-clock-o"></i>
                </div>

                <div class="counter-content">
                    <h2><?=Yii::t('yii','Announcement')?>: <a href=""><?=$elon->title?></a></h2>
                    <p><?=Yii::$app->formatter->asDate($elon->announ, 'long');?></p>
                     </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div data-date="<?=$elon->announ?>"  id="count-down"></div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</section>
<!-- Counter section end -->
<!-- Services section -->
<section class="service-section spad">
    <div class="container services">

        <div class="row">
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <i class="fa fa-newspaper-o fa-3x"></i>
                </div>
                <div class="service-content">
                    <h4><a href="#latest_news"> <?=Yii::t('yii','News')?></a></h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <i class="fa fa-address-card fa-3x"></i>
                </div>
                <div class="service-content">
                    <h4><a href="#about"><?=Yii::t('yii','about')?></a></h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <i class="fa fa-image fa-3x"></i>
                </div>
                <div class="service-content">
                    <h4><a href="#gallery"><?=Yii::t('yii','Gallery')?></a></h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <i class="fa fa-image fa-3x"></i>
                </div>
                <div class="service-content">
                    <h4><a href="#chairs"><?=Yii::t('yii','Chairs')?></a></h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="<?=Yii::$app->homeUrl?>/img/services-icons/5.png" alt="1">
                </div>
                <div class="service-content">
                    <h4><?=Yii::t('yii','Announcement')?></h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="<?=Yii::$app->homeUrl?>/img/services-icons/6.png" alt="1">
                </div>
                <div class="service-content">
                    <h4><a href="#activities"><?=Yii::t('yii','activities')?></a></h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services section end -->


<!-- Enroll section -->
<section class="enroll-section spad set-bg" id="about" data-setbg="<?=Yii::$app->homeUrl?>/upload/global/english_faculty_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title text-white">
                    <h3><?=Yii::t('yii','ENGLISH-1')?></h3>
                    <p><?=Yii::t('yii','General information about the faculty:')?></p>
                </div>
                <div class="enroll-list text-white">
                    <div class="enroll-list-item">
                        <span>1</span>
                        <h5><?=Yii::t('yii','History')?></h5>
                        <p><?=Yii::t('yii','The Faculty of English Philology was established on the basis of order No.1 of the rector of the Samarkand State Institute of Foreign Languages on January 17, 1995')?></p>
                    </div>
                    <div class="enroll-list-item">
                        <span>2</span>
                        <h5><?=Yii::t('yii','Academic areas')?></h5>
                        <p>1. <?=Yii::t('yii','5111400 Foreign language and literature: English')?></p>
                        <p>2. <?=Yii::t('yii','5120200 Foreign language in preschool and primary education: English')?></p>
                    </div>
                    <div class="enroll-list-item">
                        <span>3</span>
                        <h5><?=Yii::t('yii','Dean of the faculty of English')?></h5>
                        <p>Ismoilov Anvar Rustamovich</p>
                    </div>
                     </div>
            </div>
            <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
                <img src="<?=Yii::$app->homeUrl?>/upload/global/english_faculty_1.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Enroll section end -->

<!-- Courses section -->
<section class="courses-section spad" id="latest_news">
    <div class="container">
        <div class="section-title text-center">
            <h3><?=Yii::t('yii','News')?></h3>
            <p><?=Yii::t('yii','Latest news at our faculty')?></p>
        </div>
        <div class="row">
           <?php foreach ($latestNewses as $latestNews):?>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="<?=Yii::$app->homeUrl?>/img/course/1.jpg" alt="">
                    <div class="course-cat">
                        <span><?=$latestNews->category->name?></span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> <?= Yii::$app->formatter->asRelativeTime($latestNews->created_at)?></div>
                    <h4><?=mb_substr($latestNews->getDescription(), 0, 100);?>....</h4>
                    <div class="site-btn"><a href="<?=Url::to(['post/view', 'id'=>$latestNews->id])?>"><?=Yii::t('yii','READ MORE')?></a></div>
                </div>
            </div>
          <?php endforeach;?>

        </div>
    </div>
</section>
<!-- Courses section end-->


<!-- Fact section -->
<section class="fact-section spad set-bg" data-setbg="<?=Yii::$app->homeUrl?>/img/fact-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-time"></i>
                </div>
                <div class="fact-text">
                    <h2>25</h2>
                    <p><?=Yii::t('yii','year')?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-briefcase"></i>
                </div>
                <div class="fact-text">
                    <h2>58</h2>
                    <p><?=Yii::t('yii','teachers')?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-user"></i>
                </div>
                <div class="fact-text">
                    <h2>500</h2>
                    <p><?=Yii::t('yii','students')?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-pencil-alt"></i>
                </div>
                <div class="fact-text">
                    <h2>5</h2>
                    <p><?=Yii::t('yii','departments')?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fact section end-->
<!-- Event section -->
<section class="event-section spad" id="activities">
    <div class="container">
        <div class="section-title text-center">
            <h3><?=Yii::t('yii','activities')?></h3>
            <p><?=Yii::t('yii','Recent events at our faculty')?></p>
        </div>
        <div class="row">
            <?php foreach ($events as $event):?>
            <div class="col-md-6 event-item">
                <div class="event-thumb">
                    <img src="<?=Yii::$app->homeUrl?>/img/event/1.jpg" alt="">
                    <div class="event-date">
                        <span><?=$event->category->name?></span>
                    </div>
                </div>
                <div class="event-info">
                    <h4><?=$event->title?></h4>
                    <p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
                    <a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<!-- Event section end -->
<!-- Gallery section -->
<div class="gallery-section">
    <div class="gallery" id="gallery">
        <div class="grid-sizer"></div>
        <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/1.jpg">
            <a class="img-popup" href="<?=Yii::$app->homeUrl?>/img/gallery/1.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/2.jpg">
            <a class="img-popup" href="<?=Yii::$app->homeUrl?>/img/gallery/2.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
            <a class="img-popup" href="<?=Yii::$app->homeUrl?>/img/gallery/3.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/5.jpg">
            <a class="img-popup" href="<?=Yii::$app->homeUrl?>/img/gallery/5.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/8.jpg">
            <a class="img-popup" href="<?=Yii::$app->homeUrl?>/img/gallery/8.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/4.jpg">
            <a class="img-popup" href="<?=Yii::$app->homeUrl?>/img/gallery/4.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/6.jpg">
            <a class="img-popup" href="<?=Yii::$app->homeUrl?>/img/gallery/6.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/7.jpg">
            <a class="img-popup" href="<?=Yii::$app->homeUrl?>/img/gallery/7.jpg"><i class="ti-plus"></i></a>
        </div>
    </div>
</div>
<!-- Gallery section -->


<!-- Blog section -->
<section class="blog-section spad" id="chairs">
    <div class="container">
        <div class="section-title text-center">
            <h3><?=Yii::t('yii','Chairs')?></h3>
            </div>
        <div class="row">
            <?php foreach($chairs as $chair):
                ?>
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="/upload/<?=$chair->img?>"></div>
                        <div class="blog-content">
                            <h4><a href="<?=Url::to(['post/view', 'id'=>$chair->id])?>"><?=$chair->getTitle()?></a></h4>
                            <p><a href="<?=Url::to(['post/view', 'id'=>$chair->id])?>"><?=mb_substr($chair->getDescription(), 0, 200);?>...</a></p>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> <?=$chair->created_at?></span>
                                <span><i class="fa fa-user"></i> <?=$chair->user->full_name?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<!-- Blog section -->