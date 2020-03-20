<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Create admin bookmarks.
 *
 * @package    block_admin_bookmarks
 * @copyright  2006 vinkmar
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');

require_once($CFG->libdir.'/adminlib.php');
require_login();
$context = context_system::instance();
$PAGE->set_context($context);
$adminroot = admin_get_root(false, false);  // settings not required - only pages

if ($section = optional_param('section', '', PARAM_SAFEDIR) and confirm_sesskey()) {

    if (get_user_preferences('admin_bookmarks')) {
        $bookmarks = explode(',', get_user_preferences('admin_bookmarks'));

        if (in_array($section, $bookmarks)) {
            print_error('bookmarkalreadyexists','admin');
            die;
        }

    } else {
        $bookmarks = array();
    }

    $temp = $adminroot->locate($section);

    if ($temp instanceof admin_settingpage || $temp instanceof admin_externalpage || $temp instanceof admin_category) {
        $bookmarks[] = $section;
        $bookmarks = implode(',', $bookmarks);
        set_user_preference('admin_bookmarks', $bookmarks);

    } else {
        print_error('invalidsection','admin');
        die;
    }

    if ($temp instanceof admin_settingpage) {
        redirect($CFG->wwwroot . '/' . $CFG->admin . '/settings.php?section=' . $section);

    } elseif ($temp instanceof admin_externalpage) {
        redirect($temp->url);

    } else if ($temp instanceof admin_category) {
        redirect($CFG->wwwroot . '/' . $CFG->admin . '/category.php?category=' . $section);

    }

} else {
    print_error('invalidsection','admin');
    die;
}


