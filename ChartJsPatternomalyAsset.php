<?php

namespace ereminmdev\yii2\chartjs;

use yii\web\AssetBundle;

/**
 * https://github.com/ashiguruma/patternomaly
 */
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
