<?php
namespace App\Tests\Service;

use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    public function getResultData()
    {
        return [
            [999500, "1.00M"],
            [2500000, "3.00M"],
            [2500000.2, "3.00M"],
            [-45004500.333, "-45.00M"],

            [99951, "100K"],
            [99951.33, "100K"],
            [999400, "999K"],
            [-4500450, "-4500K"],

            [2500, "2 500"],
            [2501.5, "2 502"],
            [2502.33, "2 502"],
            [1000, "1 000"],
            [-4500.33, "-4 500"],

            [0.044, "0.04"],
            [25.432, "25.43"],
            [999.1, "999.10"],
            [100.00, "100"],
            [1.000, "1"],
            [0.000, "0"],
        ];
    }

    /**
     * @param $number
     * @param $result
     * @dataProvider getResultData
     */
    public function testNumberFormatter($number, $result)
    {
        $numberFormatter = new numberFormatter();
        $result = $numberFormatter->formatNumber($number);
        $this->assertEquals($result, $result);
    }
}