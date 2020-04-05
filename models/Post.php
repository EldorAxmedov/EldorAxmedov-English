<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $category_id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $img
 * @property string|null $created_at
 * @property int $count_view
 * @property string $slug
 *
 * @property Category $category
 * @property User $user
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }
    public $translate_title;
    public $translate_description;
    public $translate_content;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'description', 'content', 'slug'], 'required'],
            [['category_id', 'user_id', 'count_view'], 'integer'],
            [['title', 'description', 'content'], 'string'],
            [['count_view'], 'default', 'value'=>0],
            [['user_id'], 'default', 'value'=>Yii::$app->user->id],
            [['slug'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['img'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['translate_title','translate_description','translate_content'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'user_id' => 'Muallif',
            'title' => 'Sarlavha',
            'translate_title' => Yii::t('yii','Title'),
            'description' => Yii::t('yii','Description'),
            'translate_description' => Yii::t('yii','Description'),
            'content' => 'Content',
            'translate_content' => Yii::t('yii','Content'),
            'img' => 'Img',
            'created_at' => 'Created At',
            'count_view' => 'Count View',
            'slug' => 'Slug',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    public function upload()
    {
        if ($this->validate() and $this->img->baseName) {
            $this->img->saveAs(Yii::$app->basePath.'/web/upload/' . $this->img->baseName. '.' . $this->img->extension);
            return true;
        } else {
            return false;
        }
    }

    public function getTitle($language=null)
    {
        $title = json_decode($this->title,true);

        if ($language) {
            if (isset($title[$language])) {
                return $title[$language];
            }else {
                return null;
            }
        }
        if (isset($title[Yii::$app->language])) {
            if ($title[Yii::$app->language]!='') {
                return $title[Yii::$app->language];
            }
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
    public function getDescription($language=null)
    {
        $title = json_decode($this->description,true);

        if ($language) {
            if (isset($title[$language])) {
                return $title[$language];
            }else {
                return null;
            }
        }
        if (isset($title[Yii::$app->language])) {
            if ($title[Yii::$app->language]!='') {
                return $title[Yii::$app->language];
            }
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
    public function getContent($language=null)
    {
        $title = json_decode($this->content,true);

        if ($language) {
            if (isset($title[$language])) {
                return $title[$language];
            }else {
                return null;
            }
        }
        if (isset($title[Yii::$app->language])) {
            if ($title[Yii::$app->language]!='') {
                return $title[Yii::$app->language];
            }
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }

}

