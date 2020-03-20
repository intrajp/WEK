<?php namespace RedeyeVentures\GeoPattern\SVGElements;
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


class Group extends Base
{
    protected $tag = 'g';
    protected $items;

    function __construct($items=array(), $args=array())
    {
        $this->items = $items;
        $this->args = $args;
    }

    function addItem($item)
    {
        $this->items[] = $item;
        return $this;
    }

    function setArgs($args)
    {
        $this->args = $args;
        return $this;
    }

    function getString()
    {
        $svgString = '';
        $svgString .= "<{$this->tag} {$this->argsToString($this->args)}>";
        foreach ($this->items as $item)
        {
            $svgString .= $item;
        }
        $svgString .= "</{$this->tag}>";

        return $svgString;
    }
}