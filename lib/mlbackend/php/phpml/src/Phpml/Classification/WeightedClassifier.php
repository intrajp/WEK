<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\Classification;

abstract class WeightedClassifier implements Classifier
{
    /**
     * @var array
     */
    protected $weights = [];

    /**
     * Sets the array including a weight for each sample
     */
    public function setSampleWeights(array $weights): void
    {
        $this->weights = $weights;
    }
}
