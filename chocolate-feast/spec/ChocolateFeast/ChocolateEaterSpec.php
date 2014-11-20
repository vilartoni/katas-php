<?php

namespace spec\ChocolateFeast;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ChocolateEaterSpec extends ObjectBehavior
{
    public function it_does_not_eat_chocolate_if_there_is_no_money()
    {
        $this->eatChocolate(0, 1, 2)->shouldReturn(0);
    }

    public function it_does_not_eat_chocolate_if_there_is_not_enough_money()
    {
        $this->eatChocolate(1, 2, 2)->shouldReturn(0);
    }

    public function it_does_eat_one_chocolate_if_there_is_no_money_for_more()
    {
        $this->eatChocolate(2, 2, 3)->shouldReturn(1);
    }

    public function it_does_eat_one_chocolate_if_enough_money_and_cannot_exchange_wrappers()
    {
        $this->eatChocolate(2, 2, 2)->shouldReturn(1);
    }

    public function it_does_eat_two_chocolates_if_enough_money_and_cannot_exchange_wrappers()
    {
        $this->eatChocolate(4, 2, 3)->shouldReturn(2);
    }

    public function it_does_eat_as_many_chocolates_as_can_buy_if_cannot_exchange_wrappers()
    {
        $this->eatChocolate(2, 2, 2)->shouldReturn(1);
        $this->eatChocolate(4, 2, 3)->shouldReturn(2);
        $this->eatChocolate(10, 3, 4)->shouldReturn(3);
        $this->eatChocolate(20, 2, 11)->shouldReturn(10);
    }

    public function it_exchanges_wrappers_and_eats_lots_of_chocolates()
    {
        $this->eatChocolate(4, 2, 2)->shouldReturn(3);
        $this->eatChocolate(10, 2, 5)->shouldReturn(6);
        $this->eatChocolate(6, 2, 2)->shouldReturn(5);
        $this->eatChocolate(12, 2, 2)->shouldReturn(11);
    }
}
