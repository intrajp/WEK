<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\Math;

use Phpml\Exception\InvalidArgumentException;

class Comparison
{
    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @throws InvalidArgumentException
     */
    public static function compare($a, $b, string $operator): bool
    {
        switch ($operator) {
            case '>':
                return $a > $b;
            case '>=':
                return $a >= $b;
            case '=':
            case '==':
                return $a == $b;
            case '===':
                return $a === $b;
            case '<=':
                return $a <= $b;
            case '<':
                return $a < $b;
            case '!=':
            case '<>':
                return $a != $b;
            case '!==':
                return $a !== $b;
            default:
                throw new InvalidArgumentException(sprintf('Invalid operator "%s" provided', $operator));
        }
    }
}