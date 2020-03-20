<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\Preprocessing\Imputer;

interface Strategy
{
    /**
     * @return mixed
     */
    public function replaceValue(array $currentAxis);
}
