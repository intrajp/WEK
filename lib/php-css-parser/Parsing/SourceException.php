<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace Sabberworm\CSS\Parsing;

class SourceException extends \Exception {
	private $iLineNo;
	public function __construct($sMessage, $iLineNo = 0) {
		$this->iLineNo = $iLineNo;
		if (!empty($iLineNo)) {
			$sMessage .= " [line no: $iLineNo]";
		}
		parent::__construct($sMessage);
	}

	public function getLineNo() {
		return $this->iLineNo;
	}
}