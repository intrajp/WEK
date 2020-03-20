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

$string['admindirname'] = '管理目录';
$string['availablelangs'] = '可用的语言包';
$string['chooselanguagehead'] = '选择一种语言';
$string['chooselanguagesub'] = '请选择在安装过程中使用的语言。这个语言也会成为网站的缺省语言，不过以后可以随时更改。';
$string['clialreadyconfigured'] = 'config.php 文件已存在。如果您想安装此网站，请使用 admin/cli/install_database.php。';
$string['clialreadyinstalled'] = '文件config.php已存在。如果您想升级此网站，请使用admin/cli/upgrade.php。';
$string['cliinstallheader'] = 'Moodle {$a}命令行安装程序';
$string['databasehost'] = '数据库主机';
$string['databasename'] = '数据库名';
$string['databasetypehead'] = '选择数据库驱动';
$string['dataroot'] = '数据目录';
$string['datarootpermission'] = '数据目录权限';
$string['dbprefix'] = '表格名称前缀';
$string['dirroot'] = 'Moodle目录';
$string['environmenthead'] = '检测您的运行环境...';
$string['environmentsub2'] = '每个Moodle的发行版都有一些对PHP版本的最低要求和几个必须安装的PHP扩展。在每次安装和升级前会做完整的环境检查。如果您不知道如何安装新版或启用PHP扩展，请与服务器管理员联系。';
$string['errorsinenvironment'] = '环境检查失败！';
$string['installation'] = '安装';
$string['langdownloaderror'] = '很不幸，无法下载“{$a}”语言包。安装过程将以英文继续。';
$string['memorylimithelp'] = '<p>您服务器的PHP内存限制是{$a}。</p>

<p>这会使Moodle在将来运行是碰到内存问题，特别是您安装了很多模块并且/或者有很多用户。</p>

<p>我们建议可能的话把限制设定的高一些，譬如40M。有几种方法可以做到这一点：</p>
<ol>
<li>如果可以，重新编译PHP并使用<i>--enable-memory-limit</i>选项。这允许Moodle自己设定内存限制。</li>
<li>如果可以访问php.ini文件，您可以修改<b>memory_limit</b>的设置为其它值，如40M。如果您无法访问，可以让您的管理员帮您修改一下。</li>
<li>在一些PHP服务器上，您可以在Moodle目录中创建一个.htaccess文件并包含如下内容:
<blockquote>php_value memory_limit 40M</blockquote>
<p>然而，在一些服务器上这会让<b>所有</b>PHP页面无法正常工作(在访问页面时会有错误)，因此您可能不得不删除.htaccess文件。</p></li>
</ol>';
$string['paths'] = '路径';
$string['pathserrcreatedataroot'] = '安装程序无法建立数据目录({$a->dataroot})。';
$string['pathshead'] = '确认路径';
$string['pathsrodataroot'] = '数据目录不可写';
$string['pathsroparentdataroot'] = '父目录({$a->parent})不可写。安装程序无法建立数据目录({$a->dataroot})。';
$string['pathssubadmindir'] = '有些网络主机使用/admin这个URL来访问控制面板或其它功能。很不幸，这个设置和Moodle管理页面的标准路径冲突。这个问题可以解决，只需在您的安装目录中把admin目录换名，然后把新名字输入到这里。例如<em>moodleadmin</em>。这么做会改变Moodle中的管理链接。';
$string['pathssubdataroot'] = 'Moodle需要一个位置存放上传的文件。这个目录对于Web服务器用户(通常是“nobody”或“apache”)应当是可读可写的，但应当不能直接通过Web访问它。如果它不存在，安装程序会尝试建立。';
$string['pathssubdirroot'] = 'Moodle安装的完整路径。';
$string['pathssubwwwroot'] = '可以访问到Moodle的完整网址。
Moodle不支持通过多个地址访问。如果您的网站有多个公开地址，您必须把这个地址以外的所有地址都设为永久重定向。如果您的网站既可以通过内部地址访问，也可以通过这个公开地址访问，那么请配置DNS使内部网用户也能使用公开地址。如果此地址不正确，请在浏览器中修改URL来重新安装，并设定另一个地址。';
$string['pathsunsecuredataroot'] = '数据目录所在位置不安全';
$string['pathswrongadmindir'] = '管理目录不存在';
$string['phpextension'] = '{$a} PHP扩展';
$string['phpversion'] = 'PHP版本';
$string['phpversionhelp'] = '<p>Moodle需要PHP 4.3.0或5.1.0（5.0.x有若干已知的问题）以上的版本。</p>
<p>您当前使用的是{$a}</p>
<p>您必须升级PHP或者转移到一个有新版PHP的服务器上！<br />
（如果正使用5.0.x，您也可以降级到4.4.x版）</p>
';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = '您看到这个页面表明您已经成功地在您的计算机上安装并启用了<strong>{$a->packname} {$a->packversion}</strong>软件包。恭喜您！';
$string['welcomep30'] = '<strong>{$a->installername}</strong>的此发行版包含了可以创建<strong>Moodle</strong>运行环境的应用程序：';
$string['welcomep40'] = '这个软件包还包含了<strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>。';
$string['welcomep50'] = '使用本软件包中包含的应用程序时应遵循它们各自的授权协议。整个<strong>{$a->installername}</strong>软件包都是<a href="http://www.opensource.org/docs/definition_plain.html">开源</a>的，并且遵循<a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>授权协议发布。';
$string['welcomep60'] = '接下来的页面会引导您通过一系列步骤在您的计算机上安装并配置好<strong>Moodle</strong>。您可以接受缺省的设置，或者根据需要修改它们。';
$string['welcomep70'] = '点击“向后”按钮以继续<strong>Moodle</strong>的安装过程。';
$string['wwwroot'] = '网站地址';
