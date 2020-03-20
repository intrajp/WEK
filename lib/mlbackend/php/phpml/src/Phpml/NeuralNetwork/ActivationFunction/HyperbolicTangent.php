<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\NeuralNetwork\ActivationFunction;

use Phpml\NeuralNetwork\ActivationFunction;

class HyperbolicTangent implements ActivationFunction
{
    /**
     * @var float
     */
    private $beta;

    public function __construct(float $beta = 1.0)
    {
        $this->beta = $beta;
    }

    /**
     * @param float|int $value
     */
    public function compute($value): float
    {
        return tanh($this->beta * $value);
    }

    /**
     * @param float|int $value
     * @param float|int $computedvalue
     */
    public function differentiate($value, $computedvalue): float
    {
        return 1 - $computedvalue ** 2;
    }
}
