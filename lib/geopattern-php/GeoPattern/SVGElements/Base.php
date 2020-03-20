<?php namespace RedeyeVentures\GeoPattern\SVGElements;
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


abstract class Base
{
    protected $tag;
    protected $elements;
    protected $args;

    function __construct($args)
    {
        $this->args = $args;
    }

    public function elementsToString()
    {
        $string = ' ';
        foreach ($this->elements as $key => $value)
        {
            $string .= "$key=\"$value\" ";
        }
        return $string;
    }

    public function argsToString()
    {
        $string = '';
        foreach ($this->args as $key => $value)
        {
            if (is_array($value))
            {
                $string .= "$key=\"";
                foreach ($value as $k => $v)
                {
                    $string .= "$k:$v;";
                }
                $string .= '" ';
            }
            else
            {
                $string .= "$key=\"$value\" ";
            }
        }
        return $string;
    }

    public function getString()
    {
        return "<{$this->tag}{$this->elementsToString()}{$this->argsToString()}/>";
    }

    function __toString()
    {
        return $this->getString();
    }
}