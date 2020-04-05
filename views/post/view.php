<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->getTitle();
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<section class="blog-page-section spad pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post-item post-details">

                    <div class="post-content">
                        <h3><a href="<?=Yii::$app->homeUrl?>"><?=$model->getTitle();?></a></h3>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar-o"> <?=Yii::$app->formatter->asDate($model->created_at);?></i></span>
                            <span><i class="fa fa-user"> <?=$model->user->full_name?></i></span>
                        </div>
                        <p><?=$model->getContent()?></p>
                        <div class="tag"><i class="fa fa-tag"></i> <?=$model->category->name?></div>
                           </div>

                   </div>
            </div>
            <!-- sidebar -->
            <div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">

                <div class="widget">
                    <h5 class="widget-title latest-news"><?=Yii::t('yii','Latest news')?></h5>
                    <div class="recent-post-widget">
                        <!-- recent post -->
                        <?php foreach ($latestViewNewses as $latestViewNews):?>
                        <div class="rp-item">
                            <div class="rp-thumb set-bg" data-setbg="/web/img/blog/recent-post/1.jpg"></div>
                            <div class="rp-content">
                                <h6><?=$latestViewNews->getTitle();?></h6>
                                <p><i class="fa fa-clock-o"></i> <?=$latestViewNews->created_at?></p>
                            </div>
                        </div>
                        <?endforeach;?>
                        </div>
                </div>
                <!-- widget -->
                <div class="widget">
                    <h4 class="widget-title"><?=Yii::t('yii','Tags')?></h4>
                    <div class="tags">
                        <?php foreach ($categoriesViews as $categoriesView):?>
                        <a href="#"><?=$categoriesView->name?></a>
                        <?endforeach;?>
                        </div>
                </div>
                <!-- widget -->
                </div>
        </div>
    </div>
</section>
<section class="testimonial-section spad">
    <div class="container">
        <?=app\widgets\Chairs::widget();?>
    </div>
</section>
<!-- Blog page section end -->