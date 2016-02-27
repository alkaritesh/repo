<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

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
       // 'bootstrap/css/bootstrap.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        'font-awesome/css/font-awesome.min.css',
        'ionicons-2.0.1/css/ionicons.min.css'
    ];
    public $js = [
       // 'bootstrap/js/bootstrap.min.js',
        'dist/js/app.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
