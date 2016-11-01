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
class AppAssetRecepcionista extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'cssRecepcionista/styleVerDatosSolictudServicio.css',
        'cssRecepcionista/styleListarSolicitudes.css',
        'cssRecepcionista/styleSolictudServicioRemis.css',
        'cssRecepcionista/styleCommon.css',
    ];
    public $js = [
        'js/Maps.js',
        'js/Mapas.js',
        'js/AperturaPopupLogin.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}