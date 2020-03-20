<?php namespace RedeyeVentures\GeoPattern\SVGElements;
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


class Circle extends Base
{
    protected $tag = 'circle';

    function __construct($cx, $cy, $r, $args=array())
    {
        $this->elements = [
            'cx' => $cx,
            'cy' => $cy,
            'r' => $r,
        ];
        parent::__construct($args);
    }
}