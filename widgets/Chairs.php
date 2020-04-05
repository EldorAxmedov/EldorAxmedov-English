<?php
namespace app\widgets;
use yii\base\Widget;
use app\models\Post;

class Chairs extends Widget{

    function run()
    {
        $chairswidget=Post::find()->where(['category_id'=>7])->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('chairs',[
            'chairswidget'=>$chairswidget,
            ]);

    }

}
