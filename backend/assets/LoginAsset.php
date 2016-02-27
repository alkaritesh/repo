<?php
/**
 * Created by PhpStorm.
 * User: Ritesh Singh
 * Date: 2/21/2016
 * Time: 12:09 PM
 */
namespace backend\assets;
use yii\web\AssetBundle;
Class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}