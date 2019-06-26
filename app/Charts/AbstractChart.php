<?php

namespace App\Charts;

abstract class AbstractChart
{
    private const Opacity = 0.25;

    protected $datasets;
    protected $labels;
    protected $chartColors;
    protected $data = [];
    protected $title;
    protected $options;
    protected $type;

    public function __construct($labels, $datasets, $title = null, $options = null)
    {
        $this->labels = $labels;
        $this->datasets = $datasets;
        $this->options = $options;
        $this->title = $title;
        $this->chartColors = $this->getColors();
        $this->buildChartData();
    }

    abstract protected function buildChartData();

    abstract public function getResponse();

    protected function setType(string $type)
    {
        $this->type = $type;
    }

    protected function hex2rgba($color)
    {
        $color = substr($color, 1);
        $hex = [$color[0].$color[1], $color[2].$color[3], $color[4].$color[5]];
        $rgb = array_map('hexdec', $hex);
        $result = 'rgba('.implode(',', $rgb).','.self::Opacity.')';

        return $result;
    }

    private function getColors()
    {
        $colors = [
            '#3266cc',
            '#0f9719',
            '#9d009c',
            '#fe9901',
            '#db3913',
            '#8B4513',
            '#008080',
            '#6A5ACD',
            '#708090',
            '#FFA500',
        ];
        shuffle($colors);
        return $colors;
    }
}
