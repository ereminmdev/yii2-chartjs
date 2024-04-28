<?php

namespace ereminmdev\yii2\chartjs;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\JsExpression;

/**
 * Class ChartJs
 * @package ereminmdev\yii2\chartjs
 *
 * https://www.chartjs.org/docs/latest/
 */
class ChartJs extends Widget
{
    /**
     * @var string
     */
    public $type = 'line';
    /**
     * @var array
     */
    public $data = [];
    /**
     * @var array
     */
    public $options = [];
    /**
     * @var array
     */
    public $plugins = [];

    /**
     * @var array the client options
     * https://www.chartjs.org/docs/latest/configuration/
     */
    public $clientOptions = [];
    /**
     * @var array canvas element html attributes
     */
    public $canvasOptions = [];

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $id = $this->getId();
        $view = $this->getView();

        $this->canvasOptions['id'] ??= $id;
        echo Html::tag('canvas', '', $this->canvasOptions);

        ChartJsAsset::register($view);

        $this->clientOptions['type'] ??= $this->type;
        $this->clientOptions['data'] ??= $this->data;
        $this->clientOptions['options'] = ($this->clientOptions['options'] ?? $this->options) ?: null;
        $this->clientOptions['plugins'] = ($this->clientOptions['plugins'] ?? $this->plugins) ?: null;

        $view->registerJs('window.chartJs_' . $id . ' = new Chart(document.getElementById("' . $id . '"), ' . Json::encode($this->clientOptions) . ');');
    }
}
