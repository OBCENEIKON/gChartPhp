<?php
namespace imgchart;
/**
 * @brief 3-dimensional Pie Chart
 */
class imgPie3DChart extends imgPieChart
{
    function __construct($width = 500, $height = 200)
    {
        $this->setProperty('cht', 'p3');
        $this->setDimensions($width, $height);
    }
}