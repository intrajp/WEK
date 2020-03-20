<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace Box\Spout\Common\Helper\Escaper;

/**
 * Interface EscaperInterface
 */
interface EscaperInterface
{
    /**
     * Escapes the given string to make it compatible with PHP
     *
     * @param string $string The string to escape
     * @return string The escaped string
     */
    public function escape($string);

    /**
     * Unescapes the given string to make it compatible with PHP
     *
     * @param string $string The string to unescape
     * @return string The unescaped string
     */
    public function unescape($string);
}
