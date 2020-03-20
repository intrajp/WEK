<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


/**
 *
 * Function code for the matrix direct sum operation
 *
 * @copyright  Copyright (c) 2018 Mark Baker (https://github.com/MarkBaker/PHPMatrix)
 * @license    https://opensource.org/licenses/MIT    MIT
 */
namespace Matrix;

use Matrix\Operators\DirectSum;

/**
 * Adds two or more matrices
 *
 * @param     mixed[]    $matrixValues   The matrices to add
 * @return    Matrix
 * @throws    Exception
 */
function directsum(...$matrixValues)
{
    if (count($matrixValues) < 2) {
        throw new Exception('This operation requires at least 2 arguments');
    }

    $matrix = array_shift($matrixValues);
    if (!is_object($matrix) || !($matrix instanceof Matrix)) {
        $matrix = new Matrix($matrix);
    }

    $result = new DirectSum($matrix);

    foreach ($matrixValues as $matrix) {
        $result->execute($matrix);
    }

    return $result->result();
}
