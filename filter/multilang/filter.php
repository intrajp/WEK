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
 * @package    filter_multilang
 * @copyright  Gaetan Frenoy <gaetan@frenoy.net>
 * @copyright  2004 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Given XML multilinguage text, return relevant text according to
// current language:
//   - look for multilang blocks in the text.
//   - if there exists texts in the currently active language, print them.
//   - else, if there exists texts in the current parent language, print them.
//   - else, print the first language in the text.
// Please note that English texts are not used as default anymore!
//
// This version is based on original multilang filter by Gaetan Frenoy,
// rewritten by Eloy and skodak.
//
// Following new syntax is not compatible with old one:
//   <span lang="XX" class="multilang">one lang</span><span lang="YY" class="multilang">another language</span>


/**
 * Implementation of the Moodle filter API for the Multi-lang filter.
 *
 * @copyright  Gaetan Frenoy <gaetan@frenoy.net>
 * @copyright  2004 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class filter_multilang extends moodle_text_filter {
    function filter($text, array $options = array()) {
        global $CFG;

        // [pj] I don't know about you but I find this new implementation funny :P
        // [skodak] I was laughing while rewriting it ;-)
        // [nicolasconnault] Should support inverted attributes: <span class="multilang" lang="en"> (Doesn't work curently)
        // [skodak] it supports it now, though it is slower - any better idea?

        if (empty($text) or is_numeric($text)) {
            return $text;
        }

        if (empty($CFG->filter_multilang_force_old) and !empty($CFG->filter_multilang_converted)) {
            // new syntax
            $search = '/(<span(\s+lang="[a-zA-Z0-9_-]+"|\s+class="multilang"){2}\s*>.*?<\/span>)(\s*<span(\s+lang="[a-zA-Z0-9_-]+"|\s+class="multilang"){2}\s*>.*?<\/span>)+/is';
        } else {
            // old syntax
            $search = '/(<(?:lang|span) lang="[a-zA-Z0-9_-]*".*?>.*?<\/(?:lang|span)>)(\s*<(?:lang|span) lang="[a-zA-Z0-9_-]*".*?>.*?<\/(?:lang|span)>)+/is';
        }

        $result = preg_replace_callback($search, [$this, 'process_match'], $text);

        if (is_null($result)) {
            return $text; //error during regex processing (too many nested spans?)
        } else {
            return $result;
        }
    }

    /**
     * This is the callback used by the preg_replace_callback call above.
     *
     * @param array $langblock one of the matches from the regex match.
     * @return string the replacement string (one of the possible translations).
     */
    protected function process_match(array $langblock): string {
        $searchtosplit = '/<(?:lang|span)[^>]+lang="([a-zA-Z0-9_-]+)"[^>]*>(.*?)<\/(?:lang|span)>/is';

        if (!preg_match_all($searchtosplit, $langblock[0], $rawlanglist)) {
            // Skip malformed blocks.
            return $langblock[0];
        }

        $langlist = array();
        foreach ($rawlanglist[1] as $index => $lang) {
            $lang = str_replace('-', '_', strtolower($lang)); // Normalize languages.
            $langlist[$lang] = $rawlanglist[2][$index];
        }

        // Follow the stream of parent languages.
        $lang = current_language();
        do {
            if (isset($langlist[$lang])) {
                return $langlist[$lang];
            }
        } while ($lang = $this->get_parent_lang($lang));

        // If we don't find a match, default to the first provided translation.
        return array_shift($langlist);
    }

    /**
     * Puts some caching around get_parent_language().
     *
     * Also handle parent == 'en' in a way that works better for us.
     *
     * @param string $lang a Moodle language code, e.g. 'fr'.
     * @return string the parent language.
     */
    protected function get_parent_lang(string $lang): string {
        static $parentcache;
        if (!isset($parentcache)) {
            $parentcache = ['en' => ''];
        }
        if (!isset($parentcache[$lang])) {
            $parentcache[$lang] = get_parent_language($lang);
            // The standard get_parent_language method returns '' for parent == 'en'.
            // That is less helpful for us, so change it back.
            if ($parentcache[$lang] === '') {
                $parentcache[$lang] = 'en';
            }
        }
        return $parentcache[$lang];
    }
}
