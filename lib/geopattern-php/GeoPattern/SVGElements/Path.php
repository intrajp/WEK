<?php namespace RedeyeVentures\GeoPattern\SVGElements;
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


class Path extends Base
{
    protected $tag = 'path';

    function __construct($d, $args=array())
    {
        $this->elements = [
            'd' => $d,
        ];
        parent::__construct($args);
    }
}