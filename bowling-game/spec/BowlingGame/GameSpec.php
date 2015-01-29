<?php

namespace spec\BowlingGame;

use PhpSpec\ObjectBehavior;

class GameSpec extends ObjectBehavior
{
    public function it_scores_zero_for_a_gutter_game()
    {
        $this->rollMany(20, 0);

        $this->score()->shouldReturn(0);
    }

    public function it_scores_twenty_for_an_all_ones_game()
    {
        $this->rollMany(20, 1);

        $this->score()->shouldReturn(20);
    }

    public function it_adds_the_spare_bonus_for_a_spare()
    {
        $this->rollSpare();
        $this->roll(3);
        $this->rollMany(17, 0);

        $this->score()->shouldReturn(16);
    }

    public function it_adds_the_strike_bonus_for_a_strike()
    {
        $this->rollStrike();
        $this->roll(3);
        $this->roll(4);
        $this->rollMany(16, 0);

        $this->score()->shouldReturn(24);
    }

    public function it_should_score_300_for_a_perfect_game()
    {
        $this->rollMany(12, 10);

        $this->score()->shouldReturn(300);
    }

    /**
     * @param int $times
     * @param int $pins
     */
    private function rollMany($times, $pins)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->roll($pins);
        }
    }

    private function rollSpare()
    {
        $this->roll(5);
        $this->roll(5);
    }

    private function rollStrike()
    {
        $this->roll(10);
    }
}
