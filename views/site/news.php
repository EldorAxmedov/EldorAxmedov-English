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
        <a href="<?=Yii::$app->homeUrl?>"><i class="fa fa-home"></i> <?=$this->title = 'Home'?></a> <i class="fa fa-angle-right"></i>
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
                    <img src="<?=Yii::$app->homeUrl?>/img/course/1.jpg" alt="">
                    <div class="course-cat">
                        <span><?=mb_substr($news->getTitle(), 0, 20)?></span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> <?=Yii::$app->formatter->asDate($news->created_at);?></div>
                    <h4><?=mb_substr($news->getDescription(), 0, 100)?></h4>
                    <div class="site-btn"><a href="<?=Url::to(['post/view', 'id'=>$news->id])?>"><?=Yii::t('yii','READ MORE')?></a></div>
                </div>
            </div>
        <?php endforeach;?>
        </div>
        <div class="text-center">
        <ul>
                <?php echo LinkPager::widget(['pagination' => $pagination,
                   ]);?>
        </ul>
        </div>
    </div>
    </section>
<!-- Courses section end-->
