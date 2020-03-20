<?php namespace RedeyeVentures\GeoPattern\SVGElements;
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


class Polyline extends Base
{
    protected $tag = 'polyline';

    function __construct($points, $args=array())
    {
        $this->elements = [
            'points' => $points,
        ];
        parent::__construct($args);
    }
}