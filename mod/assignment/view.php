<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


require_once("../../config.php");

require_login();
$PAGE->set_context(context_system::instance());

print_error('assignmentneedsupgrade', 'assignment', '');
