<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


require_once($CFG->dirroot . '/backup/converter/convertlib.php');

class imscc1_export_converter extends base_converter {
    public static function is_available() {
        return false;
    }

    protected function execute() {

    }
}