<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    'css/site.css',
    'css/bootstrap.min.css',
	//'css/font-awesome.min.css',
	'css/themify-icons.css',
	'css/magnific-popup.css',
	'css/animate.css',
	'css/owl.carousel.css',
	'css/style.css',
    'css/TimeCircles.css',
    //'https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet',
     'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
    ];
    public $js = [
    'js/jquery-3.2.1.min.js',
	'js/owl.carousel.min.js',
	'js/jquery.countdown.js',
	'js/masonry.pkgd.min.js',
	'js/magnific-popup.min.js',
	'js/main.js',
    'js/TimeCircles.js',



       ];
    public $depends = [

        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
