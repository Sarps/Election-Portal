<?php

namespace App\Charts;

class DoughnutChart extends PiePolarOrDoughnutChart
{
    public function __construct()
    {
        parent::__construct(...func_get_args());

        $this->setType('doughnut');
    }
}
