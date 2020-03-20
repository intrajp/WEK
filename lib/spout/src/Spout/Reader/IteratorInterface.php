<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace Box\Spout\Reader;

/**
 * Interface IteratorInterface
 */
interface IteratorInterface extends \Iterator
{
    /**
     * Cleans up what was created to iterate over the object.
     *
     * @return void
     */
    public function end();
}
