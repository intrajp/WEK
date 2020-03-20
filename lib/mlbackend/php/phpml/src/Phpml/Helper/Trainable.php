<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\Helper;

trait Trainable
{
    /**
     * @var array
     */
    private $samples = [];

    /**
     * @var array
     */
    private $targets = [];

    public function train(array $samples, array $targets): void
    {
        $this->samples = array_merge($this->samples, $samples);
        $this->targets = array_merge($this->targets, $targets);
    }
}
