<?php
namespace App\Service;

class NumberFormatter
{
    public function formatNumber($number)
    {
    	if(abs($number) >= 999500)
        {
            $number = number_format((float)$number/1000000, 2, '.', '').'M';
        }

        if(abs($number) < 999500 && abs($number) >= 99950)
        {
            $number = round($number/1000).'K';
        }

        if(abs($number) < 99950 && abs($number) >= 1000)
        {
            $number = number_format((float)$number, 0, '.', ' ');
        }

        if(abs($number) >= 0 && abs($number) < 1000)
        {
            $number = round($number, 2);
        }

        	return $number;
    }
}