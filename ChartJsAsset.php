<?php

namespace ereminmdev\yii2\chartjs;

use yii\web\AssetBundle;

/**
 * Class ChartJsAsset
 * @package ereminmdev\yii2\chartjs
 */
class ChartJsAsset extends AssetBundle
{
    public $sourcePath = '@npm/chart.js/dist';

    public $js = [
        'chart.umd.js',
    ];
}
