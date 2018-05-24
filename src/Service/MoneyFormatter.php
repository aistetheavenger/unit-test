<?php
namespace App\Service;

class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function formatEur($number)
    {
        $number = $this->numberFormatter->formatNumber($number);
        return $number.' €';
    }

    public function formatUsd($number)
    {
        $number = $this->numberFormatter->formatNumber($number);
        return '$'.$number;
    }
}