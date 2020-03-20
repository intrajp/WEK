<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace Sabberworm\CSS;

interface Renderable {
	public function __toString();
	public function render(\Sabberworm\CSS\OutputFormat $oOutputFormat);
	public function getLineNo();
}