<?php

namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\Post;
use app\models\search\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
       * Displays a single Post model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $latestViewNewses=Post::find()->limit(6)->orderBy(['id'=>SORT_DESC])->all();
        $categoriesViews=Category::find()->limit(8)->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'latestViewNewses'=>$latestViewNewses,
            'categoriesViews'=>$categoriesViews,
        ]);
    }




    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
