<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


require_once("../../config.php");

$id = required_param('id', PARAM_INT);

// Rest in peace old assignment!
redirect(new moodle_url('/mod/assign/index.php', array('id' => $id)));
