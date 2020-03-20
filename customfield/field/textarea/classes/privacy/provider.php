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
 * Privacy Subsystem implementation for customfield_textarea.
 *
 * @package    customfield_textarea
 * @copyright  2018 Daniel Neis Araujo <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace customfield_textarea\privacy;

use core_customfield\data_controller;
use core_customfield\privacy\customfield_provider;
use core_privacy\local\request\writer;

defined('MOODLE_INTERNAL') || die();

/**
 * Privacy Subsystem for customfield_textarea implementing null_provider.
 *
 * @copyright  2018 Daniel Neis Araujo <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\null_provider, customfield_provider {

    /**
     * Get the language string identifier with the component's language
     * file to explain why this plugin stores no data.
     *
     * @return  string
     */
    public static function get_reason() : string {
        return 'privacy:metadata';
    }

    /**
     * Preprocesses data object that is going to be exported
     *
     * @param data_controller $data
     * @param \stdClass $exportdata
     * @param array $subcontext
     */
    public static function export_customfield_data(data_controller $data, \stdClass $exportdata, array $subcontext) {
        $context = $data->get_context();
        $exportdata->value = writer::with_context($context)
            ->rewrite_pluginfile_urls($subcontext, 'customfield_textarea', 'value',
                $exportdata->id, $exportdata->value);
        writer::with_context($context)
            ->export_data($subcontext, $exportdata)
            ->export_area_files($subcontext, 'customfield_textarea', 'value', $exportdata->id);
    }

    /**
     * Allows plugins to delete everything they store related to the data (usually files)
     *
     * @param string $dataidstest
     * @param array $params
     * @param array $contextids
     * @return mixed|void
     */
    public static function before_delete_data(string $dataidstest, array $params, array $contextids) {
        $fs = get_file_storage();
        foreach ($contextids as $contextid) {
            $fs->delete_area_files_select($contextid, 'customfield_textarea', 'value', $dataidstest, $params);
        }
    }

    /**
     * Allows plugins to delete everything they store related to the field configuration (usually files)
     *
     * The implementation should not delete data or anything related to the data, since "before_delete_data" is
     * invoked separately.
     *
     * @param string $fieldidstest
     * @param array $params
     * @param array $contextids
     */
    public static function before_delete_fields(string $fieldidstest, array $params, array $contextids) {
        $fs = get_file_storage();
        foreach ($contextids as $contextid) {
            $fs->delete_area_files_select($contextid, 'customfield_textarea', 'defaultvalue', $fieldidstest, $params);
        }
    }
}
