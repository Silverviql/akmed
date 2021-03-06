<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal',
    ];
    public $js = [
        'js/custom.js',
        'js/bootstrap.min.js',
        'js/jquery.easing.min.js',
        'js/script.js',
        'js/customSet_controls.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
