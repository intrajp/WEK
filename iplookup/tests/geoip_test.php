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
 * GeoIP tests
 *
 * @package    core_iplookup
 * @category   phpunit
 * @copyright  2012 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once("{$CFG->libdir}/filelib.php");
require_once("{$CFG->dirroot}/iplookup/lib.php");


/**
 * GeoIp data file parsing test.
 */
class core_iplookup_geoip_testcase extends advanced_testcase {
    public function setUp() {
        $this->resetAfterTest();
    }

    /**
     * Setup the GeoIP2File system.
     */
    public function setup_geoip2file() {
        global $CFG;
        $CFG->geoip2file = "$CFG->dirroot/iplookup/tests/fixtures/GeoIP2-City-Test.mmdb";
    }

    /**
     * Test the format of data returned in the iplookup_find_location function.
     *
     * @dataProvider ip_provider
     * @param   string  $ip The IP to test
     */
    public function test_ip($ip) {
        $this->setup_geoip2file();

        // Note: The results we get from the iplookup tests are beyond our control.
        // We used to check a specific IP to a known location, but these have become less reliable and change too
        // frequently to be used for testing.

        $result = iplookup_find_location($ip);

        $this->assertInternalType('array', $result);
        $this->assertInternalType('float', $result['latitude']);
        $this->assertInternalType('float', $result['longitude']);
        $this->assertInternalType('string', $result['city']);
        $this->assertInternalType('string', $result['country']);
        $this->assertInternalType('array', $result['title']);
        $this->assertInternalType('string', $result['title'][0]);
        $this->assertInternalType('string', $result['title'][1]);
        $this->assertNull($result['error']);
    }

    /**
     * Data provider for IP lookup test.
     *
     * @return array
     */
    public function ip_provider() {
        return [
            'IPv4: IPV4 test' => ['81.2.69.142'],
            'IPv6: IPV6 test' => ['2001:252:1::1:1:1'],
        ];
    }
}
