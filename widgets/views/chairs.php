<?php
use yii\helpers\Url;
?>

<div class="testimonial-slider owl-carousel">
    <?php foreach($chairswidget as $chair):?>
        <div class="ts-item">
            <div class="row">
                <div class="col-md-3">
                    <div class="ts-author-pic set-bg" data-setbg="/upload/<?=$chair->img?>"></div>
                </div>
                <div class="col-md-9 ts-text">
                    <p>“<?=$chair->getDescription()?>”</p>
                    <h5><?=$chair->getTitle()?></h5>
                    <span><?=Yii::t('yii','Head of the department')?></span>
                </div>
            </div>
        </div>
    <?php endforeach;?>

</div>