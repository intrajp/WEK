<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


/**
 *
 * Function code for the matrix transpose() function
 *
 * @copyright  Copyright (c) 2018 Mark Baker (https://github.com/MarkBaker/PHPMatrix)
 * @license    https://opensource.org/licenses/MIT    MIT
 */
namespace Matrix;

/**
 * Returns the transpose of a matrix or an array.
 *
 * @param     Matrix|array     $matrix    Matrix or an array to treat as a matrix.
 * @return    Matrix           The transposed matrix
 * @throws    Exception        If argument isn't a valid matrix or array.
 */
function transpose($matrix)
{
    if (!is_object($matrix) || !($matrix instanceof Matrix)) {
        $matrix = new Matrix($matrix);
    }

    return Functions::transpose($matrix);
}