<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 26/9/2016
 * Hora: 20:47
 */

//Female Concrete Component
class Female extends IComponent
{
    public function __construct()
    {
        $this->date = "Female";
        $this->setFeature("<br />Grrrl programmer features: ");
    }

    public function getAge()
    {
        return $this->ageGroup;
    }

    public function setAge($ageNow)
    {
        $this->ageGroup = $ageNow;
    }

    public function getFeature()
    {
        return $this->feature;
    }

    public function setFeature($fea)
    {
        $this->feature = $fea;
    }
}