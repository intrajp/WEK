<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace Sabberworm\CSS\Value;

abstract class PrimitiveValue extends Value {
    public function __construct($iLineNo = 0) {
        parent::__construct($iLineNo);
    }

}