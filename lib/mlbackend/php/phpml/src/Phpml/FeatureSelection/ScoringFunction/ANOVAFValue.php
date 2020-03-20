<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\FeatureSelection\ScoringFunction;

use Phpml\FeatureSelection\ScoringFunction;
use Phpml\Math\Statistic\ANOVA;

final class ANOVAFValue implements ScoringFunction
{
    public function score(array $samples, array $targets): array
    {
        $grouped = [];
        foreach ($samples as $index => $sample) {
            $grouped[$targets[$index]][] = $sample;
        }

        return ANOVA::oneWayF(array_values($grouped));
    }
}
