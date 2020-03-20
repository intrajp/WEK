<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once($CFG->libdir.'/formslib.php');

class user_message_form extends moodleform {

    function definition() {
        $mform =& $this->_form;
        $mform->addElement('header', 'general', get_string('message', 'message'));


        $mform->addElement('editor', 'messagebody', get_string('messagebody'), null, null);
        $mform->addRule('messagebody', '', 'required', null, 'server');

        $this->add_action_buttons();
    }
}
