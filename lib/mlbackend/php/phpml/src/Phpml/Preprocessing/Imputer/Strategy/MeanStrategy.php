<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\Preprocessing\Imputer\Strategy;

use Phpml\Math\Statistic\Mean;
use Phpml\Preprocessing\Imputer\Strategy;

class MeanStrategy implements Strategy
{
    public function replaceValue(array $currentAxis): float
    {
        return Mean::arithmetic($currentAxis);
    }
}
