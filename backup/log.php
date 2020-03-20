<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.

       // log.php - old scheduled backups report. Now redirecting
       // to the new admin one

    require_once("../config.php");

    require_login();

    require_capability('moodle/backup:backupcourse', context_system::instance());

    redirect("$CFG->wwwroot/report/backups/index.php", '', 'admin', 1);
