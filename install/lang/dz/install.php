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

$string['admindirname'] = 'བདག་སྐྱོང་ སྣོད་ཐོ་';
$string['availablelangs'] = 'ཐོབ་ཡོད་པའི་སྐད་ཡིག་ཚུ་གྱི་ཐོ་བཀོད།';
$string['chooselanguagehead'] = 'སྐད་ཡིག་ སེལ་འཐུ་འབད།';
$string['chooselanguagesub'] = 'གཞི་བཙུགས་ཀྱི་དོན་ལུ་རྐྱངམ་ཅིག་ སྐད་ཡིག་གཅིག་སེལ་འཐུ་འབད། ཁྱོད་ཀྱིས་ ས་ཁོངས་དང་ ལག་ལེན་པའི་སྐད་ཡིག་ཚུ་ ཤུལ་མམ་གྱི་ གསལ་གཞི་ནང་ སེལ་འཐུ་འབད་ཚུགས།';
$string['clialreadyconfigured'] = 'ཡིག་སྣོད་config.php་འདི་ཧེ་མ་ལས་འདུག།ཁྱོད་ཨ་ནཱི་ས་ཁོངས་གཞི་བཙུགས་འབད་བ་ཅིན་admin/cli/install_database.php་དེ་ལག་ལོན་འཐབ་གནང།';
$string['clialreadyinstalled'] = 'ཡིག་སྣོད་config.php་འདི་ཧེ་མ་ལས་འདུག།ཁྱོད་ཨ་ནཱི་ས་ཁོངས་ཡར་བསྐྱེད་འབད་བ་ཅིན་admin/cli/upgrade.php་དེ་ལག་ལོན་འཐབ་གནང།';
$string['cliinstallheader'] = 'Moodle {$a} command line installation program';
$string['databasehost'] = 'གནས་སྡུད་གཞི་རྟེན་host';
$string['databasename'] = 'གནས་སྡུད་གཞི་རྟེན་ མིང་།';
$string['databasetypehead'] = 'Choose database driver';
$string['dataroot'] = 'གནས་སྡུད་ སྣོད་ཐོ་';
$string['datarootpermission'] = 'Data directories permission';
$string['dbprefix'] = 'Tables prefix';
$string['dirroot'] = 'Moodle སྣོད་ཐོ།';
$string['environmenthead'] = 'ཁྱོད་རའི་ མཐའ་འཁོར་ཞིབ་དཔྱད་འབད་དོ་་་';
$string['environmentsub2'] = 'Moodleའཛིན་གྲོལ་རེ་རེ་གྱི་PHP་འཛིན་གྲོལ་དག་པ་ཅིག་དང་PHP extensionsངེས་མཁོ་དགོཔ་ཨིན།གཞི་བཙུགས་དང་ཡར་བསྐྱེད་་མ་བཟོ་བའི་ཧེ་མFull environmentཞིབ་དཔྱད་འབད་འོང་།';
$string['errorsinenvironment'] = 'Environment check failed!';
$string['installation'] = 'གཞི་བཙུགས།';
$string['langdownloaderror'] = 'སྐད་ཡིག་ "{$a}"འདི་ གཞི་བཙུགས་འབད་དེ་མིན་ནུག། གཞི་བཙུགས་འདི་ ཨིན་སྐད་ནང་ འཕྲོ་མཐུད་དེ་འབད་ནི་ཨིན།';
$string['memorylimithelp'] = '<p>ད་ལྟོ་ཁྱོད་ཀྱི་སར་བར་གྱི་དོན་ལུ་ PHP དྲན་ཚད་དེ་ $a ལུ་གཞི་སྒྲིག་འབད་དེ་འདུག།</p> <p> འདི་གིས་ཤུལ་ལས་ མུ་ཌལ་ལུ་ དྲན་ཚད་ཀྱི་དཀའ་ངལ་ཚུ་འབྱུང་བཅུག་འོང་ཝ། འདི་གི་ནང་ལས་ཡང་ ཁྱོད་ཀྱི་མུ་ཌལ་དང་ལག་ལེན་པ་ལོ་ཤ་ལྕོགས་ཅན་བཟོ་ཡོད་པ་ཅིན་ དཀའ་ངལ་འབྱུང་འོང་།</p> <p> ཁྱོད་ཀྱིས་ 40M བཟུམ་གྱི་ PHP དྲན་ཚད་ མང་སུ་ཡོད་མི་ རིམ་སྒྲིག་འབད་བ་ཅིན་ ལེགས་ཤོམ་འོང་། འདི་འབད་ནི་གི་དོན་ལུ་ ཐབས་ཤེས་ ལེ་ཤ་ཡོད་:</p> <ol> <li> ཁྱོད་ཀྱིས་ <i>--enable-memory-limit</i> དང་གཅིག་ཁར་ PHP ལོག་ཕྱོགས་སྒྲིག་འབད་ཚུགས་པ་ཅིན་ འདི་གི་ས་ མུ་ཌལ་གི་དྲན་ཚད་ཁོ་ར་གིས་སྦེ་ གཞི་སྒྲིག་འབད་ཚུགས།</li> <li>ཁྱོད་རའི་ php.ini ཡིག་སྣོད་ནང་འཛུལ་སྤྱོད་འབད་ཚུགས་པ་ཅིན་ ཁྱོད་ཀྱི་ <b>memory_limit</b>སྒྲིག་སྟངས་འདི་ 40M བཟུམ་གཅིག་ལུ་ བསྒྱུར་བཅོས་འབད་ཚུགས། ག་དེམ་ཅིག་སྦེ་འཛུལ་སྤྱོད་འབད་མ་ཚུགས་པ་ཅིན་ ཁྱོད་རའི་བདག་སྐྱོང་པ་ལུ་ འབད་བཅུག། <li> PHP སར་བར་ ལ་ལོ་གཅིག་ནང་ འོག་གི་གྲལ་ཐིག་ཚུ་ཡོད་མི་ མུ་ཌལ་སྣོད་ཐོ་ནང་ཁྱོད་ཀྱིས་ .htaccess ཡིག་སྣོད་གསར་བསྐྲུན་འབད་ཚུགས། <blockquote><div>php_value memory_limit 40M</div></blockquote> <p> དེ་འབདཝ་ད་ལུ་ སར་བར་ལ་ལོ་གཅིག་ནང་ འདི་གིས་ <b>all</b> PHP ཤོག་ལེབ་ཚུ་ གཡོག་བཀོལ་ནི་ལུ་སྔོན་བཀག་འབདཝ་ཨིན། (ཤོག་ལེབ་ཚུ་ནང་བལྟ་བའི་སྐབས་ འཛོལ་བ་ཚུ་མཐོང་འོང་) དེ་འབདཝ་ལས་ .htaccess ཡིག་སྣོད་་རྩ་བསྐྲད་གཏང་དགོ།</p></li> </ol>';
$string['paths'] = 'Paths';
$string['pathserrcreatedataroot'] = 'Data directory ({$a->dataroot}) cannot be created by the installer.';
$string['pathshead'] = 'Confirm paths';
$string['pathsrodataroot'] = 'Dataroot directory is not writable.';
$string['pathsroparentdataroot'] = 'Parent directory ({$a->parent}) is not writeable. Data directory ({$a->dataroot}) cannot be created by the installer.';
$string['pathssubadmindir'] = 'webhostsདག་པ་ཅིག་ /admin ལག་ལེན་འཐབ་འབད་དམིགས་བསལ་ URL འདི་control panel or somethingའཛུལ་སྤྱོད་འབདཝ་ཨིན། ཁ་རྗེ་མེད་པར་ Moodleབདག་སྐྱོང་ཤོག་ལེབ་ཚུ་གྱི་ཚད་ལྡན་གནས་ཁོངས་གཅིག་ཁར་མི་མཐུན་ཨིན། ཁྱོད་ཀྱི་དཀའ་ངལ་དེ་ བདག་སྐྱོང་ཀྱི་སྣོད་ཐོ་ གཞི་བཙུགས་འབད་བའི་གང་བསྐྱར་མིང་བཏགས་སྦེ་སེལ་ཚུགས། དཔེར་ན: <em>moodleadmin</em>. འདི་གྱི་Moodle ནང་ན་བདག་སྐྱོང་འབྲེལ་ལམ་ཚུ་གྱི་དཀའ་ངལ་་སེལ་ཚུགས་ཨིན།';
$string['pathssubdataroot'] = 'སྐྱེལ་བཙུགས་ཚར་མི་ཡིག་སྣོད་ཚུ་Moodleགྱི་སྲུངས་བཞག་ནི་གྱི་དོན་ལུ་ས་གནས་དགོ།ཨ་ནི་སྣོད་ཐོ(ས་གནས་)དི་web serverལག་ལེན་པ་(usually \'nobody\' or \'apache\')གྱི་readable AND WRITEABLE དགོ  འདི་འབདཝ་ད་ web ལས་འཛུལ་སྤྱོད་ཐད་ཀར་འབད་ནི་མེད་འོང་།་The installer will try to create it if doesn\'t exist.';
$string['pathssubdirroot'] = 'Moodle installation ལུ་སྣོད་ཐོ་གི་འགྲུལ་ལམ་ག་ར་བྱིན་།';
$string['pathssubwwwroot'] = 'Moodleའཛུལ་སྤྱོད་འབད་ནི་དོན་ལུ་Web གྱི་ཁ་བྱང་ག་ར་བྱིན་དགོ། སྣ་མང་ཁ་བྱང་ཚུ་གྱི་Moodleའཛུལ་སྤྱོད་འབད་མི་ཚུགས། ག་དེམ་ཅིག་འབད་ཁྱོད་ཀྱི་སྣ་མང་མི་མང་གི་ཁ་བྱང་ཚུ་ཡོད་པ་ཅིན་ འདི་མ་གཏོགས་གཞན་ག་ར་གུ་རྟག་བརྟན་སླར་ལོག་གཏང་ནི་དོན་ལུ་གཞི་སྒྲིག་འབད་དགོ། Intranet and Internet་གཉིས་ལས་ཁྱོད་ཀྱི་ས་ཁོངས་དེ་འཛུལ་སྤྱོད་འབད་བ་ཅིན་ མི་མང་གི་ཁ་བྱང་ལག་ལེན་འཐབ་དི་འབདཝ་ལས་Intranetལག་ལེན་པ་ཚུ་གྱི་ཡང་མི་མང་གི་ཁ་བྱང་ལག་ལེན་འཐབ་ཚུགས།
ག་དེམ་ཅིག་འབད་ཁྱོད་ཀྱི་ཁ་བྱང་ངེས་བདེན་མེན་བ་ཅིན་ཁྱོད་ཀྱི་browserནང་ན་URL་དེ་བསྒྱུར་བཅོས་འབད་སྦེ་ ལོག་installation with a different value.འགོ་བཙུགས།';
$string['pathsunsecuredataroot'] = 'Dataroot location is not secure';
$string['pathswrongadmindir'] = 'Admin directory does not exist';
$string['phpextension'] = '{$a} PHP extension';
$string['phpversion'] = 'PHP ཐོན་རིམ།';
$string['phpversionhelp'] = '<p>Moodle་ལུ་ ཐོན་རིམ་འདི་ ཉུང་མཐའ་ལུ་ 4.3.0 ཡང་ན་ 5.1.0 དགོ། (5.0.x ལུ་ ཤེས་ཚུགས་པའི་དཀའ་ངལ་ ལེ་ཤ་འདུག་)</p> <p>ཁྱོད་ད་ལྟོ་ཐོན་རིམ་$a གཡོག་བཀོལ་དོ་</p> <p>PHP ཡར་བསྐྱེད་འབད་དགོ་ ཡང་ན་ PHP ཐོན་རིམ་གསརཔ་ཡོད་མི་ ཧོསིཊ་གཅིག་དང་གཅིག་ཁར་ སྤོ་བཤུད་འབད།!<br /> (5.0.x ནང་ལུ་ ཁྱོད་ཀྱིས་ ཐོན་རིམ་ 4.4.x ལུ་ མར་ཕབ་འབད་ཚུགས།)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'ཁྱོད་རའི་ གློག་རིག་ནང་ <strong>{$a->packname} {$a->packversion}</strong> package འདི་ མཐའ་འཁྱོལཅན་སྦེ་ གཞི་བཙུགས་དང་ གསར་བཙུགས་འབད་ཡོདཔ་ལས་བརྟེན་ ཁྱོད་ཀྱིས་འ་ནི་ ཤོག་ལེབ་འདི་བལྟ་ཚུགསཔ་ཨིན། བཀྲིས་བདེ་ལེགས་!';
$string['welcomep30'] = '<strong>{$a->installername}</strong> གསར་བཏོན་འབད་མི་ནང་ <strong>Moodle</strong> བཀོལ་སྤྱོད་འབད་བཏུབ་མི་ མཐའ་འཁོར་གསར་བསྐྲུན་འབད་མི་གློག་རིམ་ཚུ་ཡང་ཚུདཔ་ཨིན།';
$string['welcomep40'] = 'ཐུམ་སྒྲིལ་འདི་ནང་ལུ་ <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong> ཡང་ ཚུདཔ་ཨིན།';
$string['welcomep50'] = 'ཐུམ་སྒྲིལ་འདི་ནང་ལུ་ གློག་རིམ་ཆ་མཉམ་གྱི་ལག་ལེན་ཚུ་ ཁོང་རའི་ ཆོག་ཐམ་ལུ་ དབང་ཚད་ཡོདཔ་ཨིན། <strong>{$a->installername}</strong> ཐུམ་སྒྲིལ་ཆ་ཚང་འདི་ <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> ཨིནམ་དང་ <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> ཆོག་ཐམ་དང་འཁྲིལ་ཏེ་ བགོ་བཀྲམ་འབད་འབདཝ་ཨིན།';
$string['welcomep60'] = 'འོག་གི་ཤོག་ལེབ་ཚུ་གིས་ ཁྱོད་རའི་གློག་རིག་ནང<strong>Moodle</strong> རིམ་སྒྲིག་འབད་ནིའི་ ཐབས་ལམ་ འཇམ་ཏོང་ཏོ་ཚུ་སྟོན་འོང་། སྔོན་སྒྲིག་ སྒྲིག་སྟངས་ཚུ་ དང་ལེན་འབད་ ཡང་ན་ ཁྱོད་རའི་དགོས་མཁོ་དང་བསྟུན་ཏེ་ འདི་ཚུ་ བསྒྱུར་བཅོས་འབད།';
$string['welcomep70'] = '<strong>Moodle</strong> གཞི་སྒྲིག་ འཕྲོ་མཐུད་དེ་འབད་ནིའི་དོན་ལུ་ "Next" ཨེབ་རྟ་གུ་ ཨེབ་གཏང་འབད།';
$string['wwwroot'] = 'Web ཁ་བྱང་ཚུ་';
