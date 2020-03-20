<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\NeuralNetwork\Node;

use Phpml\NeuralNetwork\Node;

class Input implements Node
{
    /**
     * @var float
     */
    private $input;

    public function __construct(float $input = 0.0)
    {
        $this->input = $input;
    }

    public function getOutput(): float
    {
        return $this->input;
    }

    public function setInput(float $input): void
    {
        $this->input = $input;
    }
}
