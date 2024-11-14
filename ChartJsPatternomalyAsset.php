<?php

namespace ereminmdev\yii2\chartjs;

use yii\web\AssetBundle;

class ChartJsPatternomalyAsset extends AssetBundle
{
    public $sourcePath = '@npm/patternomaly/dist';

    public $js = [
        'patternomaly.js',
    ];

    public $depends = [
        'ereminmdev\yii2\chartjs\ChartJsAsset',
    ];
}
