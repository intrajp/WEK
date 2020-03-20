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

$string['cannotcreatedboninstall'] = '<p>No puede crearse la BasedeDatos.</p> <p>La BasedeDatos especificada no existe y el usuario dado no tiene permiso para crear la BasedeDatos.</p> <p>El administrador del sitio debería verificar la configuración de la BasedeDatos.</p>';
$string['cannotcreatelangdir'] = 'No se puede crear el directorio de idioma.';
$string['cannotcreatetempdir'] = 'No se puede crear el directorio temp.';
$string['cannotdownloadcomponents'] = 'No se puede descargar componentes';
$string['cannotdownloadzipfile'] = 'No se puede descargar el archivo ZIP';
$string['cannotfindcomponent'] = 'No se puede encontrar el componente.';
$string['cannotsavemd5file'] = 'No se puede guardar el archivo md5';
$string['cannotsavezipfile'] = 'No se puede guardar el archivo ZIP';
$string['cannotunzipfile'] = 'No se puede descomprimir el archivo';
$string['componentisuptodate'] = 'El componente está actualizado';
$string['dmlexceptiononinstall'] = '<p>Ocurrió un error en la BasedeDatos[{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Ha fallado la comprobación del archivo descargado';
$string['invalidmd5'] = 'La variable de verificación MD5 es incorrecta no es valida - trate nuevamente';
$string['missingrequiredfield'] = 'Falta algún campo necesario';
$string['remotedownloaderror'] = '<p>Falló la descarga del componente a su servidor. Por favor verifique los ajustes del proxy, la extensión PHP cURL.está altamente recomendada.</p>
<p>Debe descargar el archivo <a href="{$a->url}">{$a->url}</a>  manualmente, copiarlo a "{$a->dest}" en su servidor y descomprimirlo allí.</p>';
$string['wrongdestpath'] = 'Ruta de destino errónea.';
$string['wrongsourcebase'] = 'Base de fuente de URL errónea.';
$string['wrongzipfilename'] = 'Nombre de archivo ZIP erróneo.';
