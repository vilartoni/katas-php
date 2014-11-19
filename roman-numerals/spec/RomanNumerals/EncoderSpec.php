<?php

namespace spec\RomanNumerals;

use PhpSpec\ObjectBehavior;

class EncoderSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('RomanNumerals\Encoder');
    }

    public function it_encodes_zero_to_an_empty_string()
    {
        $this->encode(0)->shouldReturn('');
    }

    public function it_encodes_numbers_to_single_numerals()
    {
        $this->encode(1)->shouldReturn('I');
        $this->encode(4)->shouldReturn('IV');
        $this->encode(5)->shouldReturn('V');
        $this->encode(9)->shouldReturn('IX');
        $this->encode(10)->shouldReturn('X');
        $this->encode(40)->shouldReturn('XL');
        $this->encode(50)->shouldReturn('L');
        $this->encode(90)->shouldReturn('XC');
        $this->encode(100)->shouldReturn('C');
        $this->encode(500)->shouldReturn('D');
        $this->encode(1000)->shouldReturn('M');
    }

    public function it_encodes_numbers_with_multiple_numerals()
    {
        $this->encode(2)->shouldReturn('II');
        $this->encode(30)->shouldReturn('XXX');
        $this->encode(26)->shouldReturn('XXVI');
        $this->encode(944)->shouldReturn('CMXLIV');
        $this->encode(1349)->shouldReturn('MCCCXLIX');
    }
}
