<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\NeuralNetwork;

interface ActivationFunction
{
    /**
     * @param float|int $value
     */
    public function compute($value): float;

    /**
     * @param float|int $value
     * @param float|int $computedvalue
     */
    public function differentiate($value, $computedvalue): float;
}
