<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace PhpOffice\PhpSpreadsheet\Shared\Escher;

class DgContainer
{
    /**
     * Drawing index, 1-based.
     *
     * @var int
     */
    private $dgId;

    /**
     * Last shape index in this drawing.
     *
     * @var int
     */
    private $lastSpId;

    private $spgrContainer;

    public function getDgId()
    {
        return $this->dgId;
    }

    public function setDgId($value)
    {
        $this->dgId = $value;
    }

    public function getLastSpId()
    {
        return $this->lastSpId;
    }

    public function setLastSpId($value)
    {
        $this->lastSpId = $value;
    }

    public function getSpgrContainer()
    {
        return $this->spgrContainer;
    }

    public function setSpgrContainer($spgrContainer)
    {
        return $this->spgrContainer = $spgrContainer;
    }
}
