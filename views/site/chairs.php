<?php
use yii\helpers\Url;
$this->title = Yii::t('yii', 'Chairs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-breadcrumb">
    <div class="container">
        <a href="<?=Yii::$app->homeUrl?>"><i class="fa fa-home"></i> <?=$this->title = 'Home'?></a> <i class="fa fa-angle-right"></i>
        <span> <?=$this->title = Yii::t('yii', 'Chairs')?></span>
    </div>
</div>
<section class="full-courses-section spad pt-0">
    <div class="container">
        <div class="row">
            <?php foreach ($chairses as $itemchair):?>
                <div class="col-lg-6 chairs">
                    <div class="card">
                        <img src="/upload/<?=$itemchair->img?>" class="card-img-top chair_img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a class="chair_title" href="<?=Url::to(['post/view', 'id'=>$itemchair->id])?>"><?=$itemchair->getTitle()?></a></h5>
                            <p class="card-text"><?=mb_substr($itemchair->getDescription(), 0, 300)?>....</p>
                            <p class="card-text"><i class="fa fa-calendar-o"> <?=Yii::$app->formatter->asDate($itemchair->created_at);?></i></p>

                        </div>
                    </div>
                </div>
            <?php endforeach;?>
                 </div>

    </div>
</section>
