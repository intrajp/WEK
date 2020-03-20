<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace Box\Spout\Writer\Exception\Border;

use Box\Spout\Common\Entity\Style\BorderPart;
use Box\Spout\Writer\Exception\WriterException;

class InvalidWidthException extends WriterException
{
    public function __construct($name)
    {
        $msg = '%s is not a valid width identifier for a border. Valid identifiers are: %s.';

        parent::__construct(sprintf($msg, $name, implode(',', BorderPart::getAllowedWidths())));
    }
}
