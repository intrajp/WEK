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
 * The mod_wiki page updated event.
 *
 * @package    mod_wiki
 * @copyright  2013 Rajesh Taneja <rajesh@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_wiki\event;
defined('MOODLE_INTERNAL') || die();

/**
 * The mod_wiki page updated event class.
 *
 * @property-read array $other {
 *      Extra information about event.
 *
 *      - string newcontent: (optional) updated content.
 * }
 *
 * @package    mod_wiki
 * @since      Moodle 2.7
 * @copyright  2013 Rajesh Taneja <rajesh@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class page_updated extends \core\event\base {
    /**
     * Init method.
     *
     * @return void
     */
    protected function init() {
        $this->data['crud'] = 'u';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        $this->data['objecttable'] = 'wiki_pages';
    }

    /**
     * Return localised event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('eventpageupdated', 'mod_wiki');
    }

    /**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '$this->userid' updated the page with id '$this->objectid' for the wiki with " .
            "course module id '$this->contextinstanceid'.";
    }

    /**
     * Return the legacy event log data.
     *
     * @return array
     */
    protected function get_legacy_logdata() {
        return(array($this->courseid, 'wiki', 'edit', 'view.php?pageid=' . $this->objectid, $this->objectid,
            $this->contextinstanceid));
    }

    /**
     * Get URL related to the action.
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/mod/wiki/view.php', array('pageid' => $this->objectid));
    }

    public static function get_objectid_mapping() {
        return array('db' => 'wiki_pages', 'restore' => 'wiki_page');
    }

    public static function get_other_mapping() {
        // Nothing to map.
        return false;
    }
}