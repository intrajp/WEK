<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 2 of the License, or
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
 * sqlsrv specific temptables store. Needed because temporary tables
 * are named differently than normal tables. Also used to be able to retrieve
 * temp table names included in the get_tables() method of the DB.
 *
 * @package    core_dml
 * @copyright  2009 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__.'/moodle_temptables.php');

/**
 * This class is not specific to the SQL Server Native Driver but rather
 * to the family of Microsoft SQL Servers.
 *
 * @package    core_dml
 * @copyright  2009 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */
class sqlsrv_native_moodle_temptables extends moodle_temptables {

    /**
     * Add one temptable to the store.
     *
     * Overriden because SQLSRV requires to add # for local (session) temporary
     * tables before the prefix.
     *
     * Given one moodle temptable name (without prefix), add it to the store, with the
     * key being the original moodle name and the value being the real db temptable name
     * already prefixed
     *
     * Override and use this *only* if the database requires modification in the table name.
     *
     * @param string $tablename name without prefix of the table created as temptable
     */
    public function add_temptable($tablename) {
        // TODO: throw exception if exists: if ($this->is_temptable...
        $this->temptables[$tablename] = '#' . $this->prefix . $tablename;
    }
}
