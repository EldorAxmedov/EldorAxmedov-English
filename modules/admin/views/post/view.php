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
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ushbu postni o\'chirishni xohlaysizmi?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php
    $languages = Yii::$app->params['languages'];
    ?>
    <div class="tab-content">
        <?php foreach ($languages as $language => $label) { ?>
            <table class="table table-striped table-bordered detail-view">
                <div id="<?=$language?>" class="tab-pane fade">
                    <tr>
                        <th class="width-20prs"><?=Yii::t('yii','Title',null,$language)?></th>
                        <td><?=$model->getTitle($language)?></td>
                    </tr>
                    <tr>
                        <th class="width-20prs"><?=Yii::t('yii','Description',null,$language)?></th>
                        <td><?=$model->getDescription($language)?></td>
                    </tr>
                    <tr>
                        <th class="width-20prs"><?=Yii::t('yii','Content',null,$language)?></th>
                        <td><?=$model->getContent($language)?></td>
                    </tr>
                </div>
            </table>

        <?php } ?>

    </div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category.name',
            'user.full_name',
            ['attribute'=>'img',
                    'value'=>($model->img)?Html::img('/web/upload/'.$model->img, ['style'=>'width:200px']):null,
             'format'=>'raw',
             ],
             'created_at',
            'count_view',
            'slug',
        ],
    ]) ?>

</div>
