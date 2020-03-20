<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace Sabberworm\CSS\Value;

class CalcRuleValueList extends RuleValueList {
	public function __construct($iLineNo = 0) {
		parent::__construct(array(), ',', $iLineNo);
	}

	public function render(\Sabberworm\CSS\OutputFormat $oOutputFormat) {
		return $oOutputFormat->implode(' ', $this->aComponents);
	}

}
