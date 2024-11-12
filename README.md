# yii2-chartjs

Yii2 widget for Chart.js library: https://www.chartjs.org/

## Install

``composer require --prefer-dist ereminmdev/yii2-chartjs``

## Documentation

https://www.chartjs.org/docs/latest/

## Use

Insert widget into view:

```
<?= \ereminmdev\yii2\chartjs\ChartJs::widget([
    'id' => 'my_chart',
    'type' => 'bar',
    'data' => [...],
    'options' => [
        'scales' => [
            'y' => [
                'beginAtZero' => true,
            ],
        ],
        'plugins' => [
            'legend' => [
                'position' => 'bottom',
            ],
        ],
    ],
    'plugins' => [...],
]) ?>
```

Display labels on data for any type of charts:

```
ChartJsDataLabelsAsset::register($view);

$view->registerJs('Chart.register(ChartDataLabels);');
```

https://chartjs-plugin-datalabels.netlify.app/
