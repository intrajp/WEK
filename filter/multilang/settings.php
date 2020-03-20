<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configcheckbox('filter_multilang_force_old', 'filter_multilang_force_old',
                       get_string('multilangforceold', 'admin'), 0));
}
