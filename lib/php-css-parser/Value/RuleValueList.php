<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace Sabberworm\CSS\Value;

class RuleValueList extends ValueList {
	public function __construct($sSeparator = ',', $iLineNo = 0) {
		parent::__construct(array(), $sSeparator, $iLineNo);
	}
}