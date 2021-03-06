<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


$caslangconstprefix = 'PHPCAS_LANG_';
$caslangprefixlen = strlen('CAS_Languages_');
$CASLANGUAGES = array ();

$consts = get_defined_constants(true);
foreach ($consts['user'] as $key => $value) {
    if (preg_match("/^$caslangconstprefix/", $key)) {
        $CASLANGUAGES[$value] = substr($value, $caslangprefixlen);
    }
}
if (empty($CASLANGUAGES)) {
    $CASLANGUAGES = array (PHPCAS_LANG_ENGLISH => 'English',
                           PHPCAS_LANG_FRENCH => 'French');
}
