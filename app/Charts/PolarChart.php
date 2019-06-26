<?php

namespace App\Charts;

class PolarChart extends PiePolarOrDoughnutChart
{
    public function __construct()
    {
        parent::__construct(...func_get_args());

        $this->setType('polarArea');
    }
}