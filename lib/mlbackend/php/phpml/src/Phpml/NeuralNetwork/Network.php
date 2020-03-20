<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\NeuralNetwork;

interface Network
{
    /**
     * @param mixed $input
     */
    public function setInput($input): self;

    public function getOutput(): array;

    public function addLayer(Layer $layer): void;

    /**
     * @return Layer[]
     */
    public function getLayers(): array;
}
