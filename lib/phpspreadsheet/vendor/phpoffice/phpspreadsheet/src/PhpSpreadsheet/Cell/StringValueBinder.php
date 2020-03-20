<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace PhpOffice\PhpSpreadsheet\Cell;

use PhpOffice\PhpSpreadsheet\Shared\StringHelper;

class StringValueBinder implements IValueBinder
{
    /**
     * Bind value to a cell.
     *
     * @param Cell $cell Cell to bind value to
     * @param mixed $value Value to bind in cell
     *
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     *
     * @return bool
     */
    public function bindValue(Cell $cell, $value)
    {
        // sanitize UTF-8 strings
        if (is_string($value)) {
            $value = StringHelper::sanitizeUTF8($value);
        }

        $cell->setValueExplicit((string) $value, DataType::TYPE_STRING);

        // Done!
        return true;
    }
}
