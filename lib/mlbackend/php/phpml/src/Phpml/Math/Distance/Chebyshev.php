<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\Math\Distance;

/**
 * Class Chebyshev
 */
class Chebyshev extends Distance
{
    /**
     * {@inheritdoc}
     */
    public function distance(array $a, array $b): float
    {
        return max($this->deltas($a, $b));
    }
}
