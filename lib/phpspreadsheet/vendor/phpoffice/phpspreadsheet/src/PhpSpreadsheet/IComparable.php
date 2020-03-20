<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace PhpOffice\PhpSpreadsheet;

interface IComparable
{
    /**
     * Get hash code.
     *
     * @return string Hash code
     */
    public function getHashCode();
}
