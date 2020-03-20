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
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Nu se poate crea baza de date.</p>
<p>Baza de date specificată nu există iar utilizatorul nu are permisiunea de a crea baza de date.</p>
<p>Admistratorul site-ului trebuie să verfice configurarea bazei de date.</p>';
$string['cannotcreatelangdir'] = 'Nu se poate crea un director lang';
$string['cannotcreatetempdir'] = 'Nu se poate crea director temporar';
$string['cannotdownloadcomponents'] = 'Nu se pot descărca componente';
$string['cannotdownloadzipfile'] = 'Fişierul arhivă ZIP nu poate fi descărcat';
$string['cannotfindcomponent'] = 'Nu a fost găsită componenta';
$string['cannotsavemd5file'] = 'Fişierul md5 nu poate fi salvat';
$string['cannotsavezipfile'] = 'Arhiva ZIP nu poate fi salvată';
$string['cannotunzipfile'] = 'Arhiva nu poate fi deschisă';
$string['componentisuptodate'] = 'Componenta este actualizată';
$string['dmlexceptiononinstall'] = '<p>A apărut o problemă la baza de date [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Verificarea fişierului descărcat a eşuat';
$string['invalidmd5'] = 'md5 incorect';
$string['missingrequiredfield'] = 'Lipseşte un câmp obligatoriu';
$string['remotedownloaderror'] = 'Operaţiunea de descărcare a componentei pe serverul dumneavoastră a eşuat, vă rugăm verificaţi setările proxy, se recomandă cu tărie folosirea extensiei PHP cURL.<br /><br />Va trebui să descărcaţi manual fişierul <a href="{$a->url}">{$a->url}</a>, să îl copiaţi în folderul "{$a->dest}" de pe serverul dumnevoastră şi să îl dezarhivaţi în acelaşi loc.';
$string['wrongdestpath'] = 'Destinaţie greşită';
$string['wrongsourcebase'] = 'Wrong source URL base';
$string['wrongzipfilename'] = 'Nume incorect pentru arhiva zip';
