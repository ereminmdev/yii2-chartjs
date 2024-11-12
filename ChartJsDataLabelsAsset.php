<?php

namespace ereminmdev\yii2\chartjs;

use yii\web\AssetBundle;

/**
 * https://chartjs-plugin-datalabels.netlify.app/
 */
class ChartJsDataLabelsAsset extends AssetBundle
{
    public $sourcePath = '@npm/chartjs-plugin-datalabels/dist';

    public $js = [
        YII_DEBUG ? 'chartjs-plugin-datalabels.js' : 'chartjs-plugin-datalabels.min.js',
    ];

    public $depends = [
        'ereminmdev\yii2\chartjs\ChartJsAsset',
    ];
}
