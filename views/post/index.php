<?php

/* @var $this yii\web\View */

$this->title = 'English 1';

use yii\helpers\Url; ?>

<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <?php foreach($sliders as $slider): ?>
            <div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle"><?=$slider->category->name?></div>
                                <h2 class="hs-title"><?=$slider->title?></h2>
                                <div class="site-btn"><a href="<?=Url::to(['post/view', 'id'=>$slider->id])?>">BATAFSIL</a></div>
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
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="big-icon">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="counter-content">
                    <h2>E'LON: <a href="<?//=Url::to(['post/view', 'id'=>$elon->id])?>"><?//=$elon->title?></a></h2>
                    <p><i class="fa fa-calendar-o"></i>07:00 PM - 09:00 PM</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="counter">
                    <div class="counter-item"><h4>20</h4>Days</div>
                    <div class="counter-item"><h4>08</h4>Hrs</div>
                    <div class="counter-item"><h4>40</h4>Mins</div>
                    <div class="counter-item"><h4>56</h4>secs</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter section end -->
<!-- Services section -->
<section class="service-section spad">
    <div class="container services">

        <div class="row">
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="img/services-icons/1.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>Yangiliklar</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="img/services-icons/2.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>Biz haqimizda</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="img/services-icons/3.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>Talabalar</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="img/services-icons/4.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>O'qituvchilar</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="img/services-icons/5.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>E'lonlar</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="img/services-icons/6.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>Tadbirlar</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services section end -->


<!-- Enroll section -->
<section class="enroll-section spad set-bg" data-setbg="upload/global/english_faculty_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title text-white">
                    <h3>INGLIZ TILI - 1</h3>
                    <p>Fakultet haqida umumiy ma'lumot:</p>
                </div>
                <div class="enroll-list text-white">
                    <div class="enroll-list-item">
                        <span>1</span>
                        <h5>Tarixi</h5>
                        <p>Samarqand davlat chet tillar instituti rektorining 1995-yil 17-yanvarda 1-sonli buyrug‘iga asosan Ingliz filologiyasi fakulteti tashkil etildi</p>
                    </div>
                    <div class="enroll-list-item">
                        <span>2</span>
                        <h5>Ta'lim yo'nalishlari</h5>
                        <p>1. 5111400 – Xorijiy til va adabiyoti: ingliz tili</p>
                        <p>2. 5120200 – Maktabgacha va boshlang‘ich ta’limda xorijiy til: ingliz tili</p>
                    </div>
                    <div class="enroll-list-item">
                        <span>3</span>
                        <h5>Fakultet dekani</h5>
                        <p>Ismoilov Anvar Rustamovich</p>
                    </div>
                     </div>
            </div>
            <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
                <img src="upload/global/english_faculty_1.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Enroll section end -->

<!-- Courses section -->
<section class="courses-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>YANGILIKLAR</h3>
            <p>FAKULTETIMIZDAGI SO'NGI YANGILIKLAR</p>
        </div>
        <div class="row">
           <?php foreach ($latestNewses as $latestNews):?>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="img/course/1.jpg" alt="">
                    <div class="course-cat">
                        <span><?=$latestNews->category->name?></span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> <?= Yii::$app->formatter->asRelativeTime($latestNews->created_at)?></div>
                    <h4><?=$latestNews->title?></h4>
                    <h4 class="cource-price">$100<span>/month</span></h4>
                </div>
            </div>
          <?php endforeach;?>

        </div>
    </div>
</section>
<!-- Courses section end-->


<!-- Fact section -->
<section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-crown"></i>
                </div>
                <div class="fact-text">
                    <h2>25</h2>
                    <p>YIL</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-briefcase"></i>
                </div>
                <div class="fact-text">
                    <h2>58</h2>
                    <p>O'QITUVCHILAR</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-user"></i>
                </div>
                <div class="fact-text">
                    <h2>500</h2>
                    <p>TALABALAR</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-pencil-alt"></i>
                </div>
                <div class="fact-text">
                    <h2>5</h2>
                    <p>KAFEDRALAR</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fact section end-->
<!-- Event section -->
<section class="event-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>TADBIRLAR</h3>
            <p>Fakultetimizda bo'lib o'tgan so'ngi tadbirlar</p>
        </div>
        <div class="row">
            <?php foreach ($events as $event):?>
            <div class="col-md-6 event-item">
                <div class="event-thumb">
                    <img src="img/event/1.jpg" alt="">
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
    <div class="gallery">
        <div class="grid-sizer"></div>
        <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/1.jpg">
            <a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/2.jpg">
            <a class="img-popup" href="img/gallery/2.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
            <a class="img-popup" href="img/gallery/3.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/5.jpg">
            <a class="img-popup" href="img/gallery/5.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/8.jpg">
            <a class="img-popup" href="img/gallery/8.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/4.jpg">
            <a class="img-popup" href="img/gallery/4.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/6.jpg">
            <a class="img-popup" href="img/gallery/6.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/7.jpg">
            <a class="img-popup" href="img/gallery/7.jpg"><i class="ti-plus"></i></a>
        </div>
    </div>
</div>
<!-- Gallery section -->


<!-- Blog section -->
<section class="blog-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>KAFEDRALAR</h3>
            <p>Kafedralar haqida yangiliklar</p>
        </div>
        <div class="row">
            <?php foreach($chairs as $chair):
                ?>
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="upload/global/english_faculty_1.jpg"></div>
                        <div class="blog-content">
                            <h4><?=$chair->title?></h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> <?=$chair->created_at?></span>
                                <span><i class="fa fa-user"></i> <?=$chair->user->full_name?></span>
                            </div>
                            <p><?=$chair->description?>...</p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<!-- Blog section -->