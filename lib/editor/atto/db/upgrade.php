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
 * Atto upgrade script.
 *
 * @package    editor_atto
 * @copyright  2014 Damyon Wiese
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Run all Atto upgrade steps between the current DB version and the current version on disk.
 * @param int $oldversion The old version of atto in the DB.
 * @return bool
 */
function xmldb_editor_atto_upgrade($oldversion) {
    global $CFG;

    // Automatically generated Moodle v3.5.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.6.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.7.0 release upgrade line.
    // Put any upgrade step following this.

    if ($oldversion < 2019090900) {
        $toolbar = get_config('editor_atto', 'toolbar');

        if (strpos($toolbar, 'h5p') === false) {
            $glue = "\r\n";
            if (strpos($toolbar, $glue) === false) {
                $glue = "\n";
            }
            $groups = explode($glue, $toolbar);
            // Try to put h5p in the files group.
            foreach ($groups as $i => $group) {
                $parts = explode('=', $group);
                if (trim($parts[0]) == 'files') {
                    $groups[$i] = 'files = ' . trim($parts[1]) . ', h5p';
                    // Update config variable.
                    $toolbar = implode($glue, $groups);
                    set_config('toolbar', $toolbar, 'editor_atto');
                }
            }
        }
        // Atto editor savepoint reached.
        upgrade_plugin_savepoint(true, 2019090900, 'editor', 'atto');
    }
    // Automatically generated Moodle v3.8.0 release upgrade line.
    // Put any upgrade step following this.

    return true;
}
