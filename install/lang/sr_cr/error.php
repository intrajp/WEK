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

$string['cannotcreatedboninstall'] = '<p>Није могуће креирати базу података.</p> <p>Наведена база не постоји, а дати корисник нема овлашћења да креира базу података.</p> <p>Администратор сајта треба да провери конфигурацију базе података.</p>';
$string['cannotcreatelangdir'] = 'Није могуће креирати директоријум језика';
$string['cannotcreatetempdir'] = 'Није могуће креирати привремени директоријум';
$string['cannotdownloadcomponents'] = 'Није могуће преузети компоненте.';
$string['cannotdownloadzipfile'] = 'Није могуће преузети архиву';
$string['cannotfindcomponent'] = 'Није могуће пронаћи компоненту.';
$string['cannotsavemd5file'] = 'Није могуће сачувати md5 датотеку.';
$string['cannotsavezipfile'] = 'Није могуће сачувти ZIP архиву.';
$string['cannotunzipfile'] = 'Није могуће распаковати ZIP датотеку.';
$string['componentisuptodate'] = 'Компонента је доступна у својој најновијој верзији';
$string['dmlexceptiononinstall'] = 'p>Дошло је до грешке у бази података [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Није успела провера преузете датотеке';
$string['invalidmd5'] = 'Неисправна md5 датотека';
$string['missingrequiredfield'] = 'Недостаје неко обавезно поље';
$string['remotedownloaderror'] = '<p>Преузимање ове компоненте на ваш сервер није успело. Проверите подешавања прокси сервера. PHP cURL екстензија се препоручује.</p>
<p>Морате да преузмете <a href="{$a->url}">{$a->url}</a> датотеку ручно, копирате је у директоријум "{$a->dest}" на свом серверу и тамо је распакујете.</p>';
$string['wrongdestpath'] = 'Погрешна одредишна путања';
$string['wrongsourcebase'] = 'Погрешна база изворног URL-a';
$string['wrongzipfilename'] = 'Погрешан назив архиве';
