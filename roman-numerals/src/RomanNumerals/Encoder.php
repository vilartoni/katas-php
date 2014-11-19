<?php

namespace RomanNumerals;

class Encoder
{
    private $encodingMap = [
        1000 => 'M',
        900  => 'CM',
        500  => 'D',
        100  => 'C',
        90   => 'XC',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9    => 'IX',
        5    => 'V',
        4    => 'IV',
        1    => 'I'
    ];

    public function encode($arabic)
    {
        $roman = '';

        foreach ($this->encodingMap as $decimal => $numeral) {
            while ($arabic >= $decimal) {
                $roman .= $numeral;
                $arabic -= $decimal;
            }
        }

        return $roman;
    }
}
