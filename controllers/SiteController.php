<?php

namespace app\controllers;

use app\models\Announcement;
use app\models\Category;
use app\models\Page;
use app\models\Post;

use PHPUnit\Util\Log\JSON;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $latestNewses = Post::find()->limit(6)->orderBy(['id'=>SORT_DESC])->all();
        $events=Post::find()->limit(2)->where(['category_id'=>8])->all();
        $elonlar=Announcement::find()->all();
        $sliders=Post::find()->limit(6)->orderBy(['id'=>SORT_DESC])->all();
        $chairs=Post::find()->where(['category_id'=>7])->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('index',[
            'latestNewses'=>$latestNewses,
            'events'=>$events,
            'sliders'=>$sliders,
            'chairs'=>$chairs,
            'elonlar'=>$elonlar,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */

    public function actionAbout()
    {
        $aboutchairs=Post::find()->where(['category_id'=>7])->orderBy(['id'=>SORT_DESC])->all();
        $abouts= Post::findOne(20);
        return $this->render('about', [
            'abouts'=>$abouts,
            'chairs'=>$aboutchairs,
        ]);
    }
    public function actionNews()
    {
        $newses = Post::find()->orderBy(['id'=>SORT_DESC]);
             $pagination= new Pagination([
                 'defaultPageSize'=>6,
                 'totalCount'=>$newses->count(),
             ]);
             $newses=$newses->offset($pagination->offset)
                 ->limit($pagination->limit)
                 ->all();
            return $this->render('news',[
            'newses'=>$newses,
            'pagination'=>$pagination,
           ]);
    }
    public function actionChairs(){
        $chairses=Post::find()->where(['category_id'=>7])->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('chairs',
            [
                'chairses'=>$chairses,
            ]);
    }

}
