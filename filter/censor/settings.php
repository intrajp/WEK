<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configtextarea('filter_censor_badwords', get_string('badwordslist','admin'),
                   get_string('badwordsconfig', 'admin').'<br />'.get_string('badwordsdefault', 'admin'), ''));
}
