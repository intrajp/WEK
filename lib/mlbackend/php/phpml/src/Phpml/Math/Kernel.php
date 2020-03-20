<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\Math;

interface Kernel
{
    /**
     * @param float|array $a
     * @param float|array $b
     *
     * @return float|array
     */
    public function compute($a, $b);
}
