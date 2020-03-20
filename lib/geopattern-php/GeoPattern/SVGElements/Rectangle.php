<?php namespace RedeyeVentures\GeoPattern\SVGElements;
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


class Rectangle extends Base
{
    protected $tag = 'rect';

    function __construct($x, $y, $width, $height, $args=array())
    {
        $this->elements = [
            'x' => $x,
            'y' => $y,
            'width' => $width,
            'height' => $height,
        ];
        parent::__construct($args);
    }
}