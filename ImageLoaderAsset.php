<?php
namespace xj\jquery\imageloader;

use Yii;
use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.cm>
 */
class ImageLoaderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/xj/yii2-jquery-imageloader/assets';
    public $js = [
        'jquery.imageloader.js',
    ];
    public $depends = ['yii\web\JqueryAsset'];

}
