<?php

namespace ereminmdev\yii2\chartjs;

use yii\web\AssetBundle;

class ChartJsAsset extends AssetBundle
{
    public $sourcePath = '@npm/chart.js/dist';

    public $js = [
        'chart.umd.js',
    ];
}
