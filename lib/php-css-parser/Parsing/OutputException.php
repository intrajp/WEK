<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace Sabberworm\CSS\Parsing;

/**
* Thrown if the CSS parsers attempts to print something invalid
*/
class OutputException extends SourceException {
	public function __construct($sMessage, $iLineNo = 0) {
		parent::__construct($sMessage, $iLineNo);
	}
}