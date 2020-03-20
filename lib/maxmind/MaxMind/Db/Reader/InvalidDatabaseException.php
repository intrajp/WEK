<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace MaxMind\Db\Reader;

use Exception;

/**
 * This class should be thrown when unexpected data is found in the database.
 */
class InvalidDatabaseException extends Exception
{
}
