<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Breadcrumb section -->
<div class="site-breadcrumb">
    <div class="container">
        <a href=""><i class="fa fa-home"></i> <?=$this->title = 'Home'?></a> <i class="fa fa-angle-right"></i>
        <span> <?= $this->title=Yii::t('yii', 'News')?></span>
    </div>
</div>
<!-- Breadcrumb section end -->
<!-- Courses section -->

<section class="full-courses-section spad pt-0">
    <div class="container">
        <div class="row">
            <!-- course item -->
            <?php foreach ($newses as $news):?>
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="/upload/<?=($news->img)? $news->img:'english_faculty_1.jpg'?>" alt="">
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> <?=Yii::$app->formatter->asDate($news->created_at);?></div>
                    <p><?=mb_substr($news->getDescription(), 0, 100)?></p>
                    <div class="site-btn"><a href="<?=Url::to(['post/view', 'id'=>$news->id])?>"><?=Yii::t('yii','READ MORE')?></a></div>
                </div>
            </div>
        <?php endforeach;?>
        </div>
      </div>
    </section>
<!-- Courses section end-->
  <div class="container">
     <div class="row">
        <div class="col-lg-4 offset-lg-4">
                       <?php echo LinkPager::widget(['pagination' => $pagination,
                   ]);?>
         </div>
     </div>
 </div>