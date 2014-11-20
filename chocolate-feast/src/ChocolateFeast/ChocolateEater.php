<?php

namespace ChocolateFeast;

class ChocolateEater
{
    public function eatChocolate($money, $price, $wrappers)
    {
        if ($money == 0 || $money < $price) {
            return 0;
        }

        $eaten = $unusedWrappers = (int) floor($money / $price);

        while ($unusedWrappers >= $wrappers) {
            $unusedWrappers -= $wrappers;
            $eaten++;
            $unusedWrappers++;
        }

        return $eaten;
    }
}
