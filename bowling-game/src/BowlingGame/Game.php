<?php

namespace BowlingGame;

class Game
{
    /** @var array */
    private $rolls = [];

    /**
     * @param int $pins
     */
    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    /**
     * @return int
     */
    public function score()
    {
        $score = 0;
        $rollIndex = 0;

        for ($frame = 0; $frame < 10; $frame++) {
            if ($this->isStrike($rollIndex)) {
                $score += 10 + $this->strikeBonus($rollIndex);
                $rollIndex++;
            } elseif ($this->isSpare($rollIndex)) {
                $score += 10 + $this->spareBonus($rollIndex);
                $rollIndex += 2;
            } else {
                $score += $this->sumOfPinsInFrame($rollIndex);
                $rollIndex += 2;
            }
        }

        return $score;
    }

    /**
     * @param int $rollIndex
     *
     * @return bool
     */
    private function isSpare($rollIndex)
    {
        return 10 === $this->rolls[$rollIndex] + $this->rolls[$rollIndex + 1];
    }

    /**
     * @param int $rollIndex
     *
     * @return bool
     */
    private function isStrike($rollIndex)
    {
        return 10 === $this->rolls[$rollIndex];
    }

    /**
     * @param int $rollIndex
     *
     * @return int mixed
     */
    private function strikeBonus($rollIndex)
    {
        return $this->rolls[$rollIndex + 1] + $this->rolls[$rollIndex + 2];
    }

    /**
     * @param int $rollIndex
     *
     * @return int mixed
     */
    private function spareBonus($rollIndex)
    {
        return $this->rolls[$rollIndex + 2];
    }

    /**
     * @param int $rollIndex
     *
     * @return int mixed
     */
    private function sumOfPinsInFrame($rollIndex)
    {
        return $this->rolls[$rollIndex] + $this->rolls[$rollIndex + 1];
    }
}
