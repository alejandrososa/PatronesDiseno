<?php

/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 26/9/2016
 * Hora: 20:44
 */

//Male Concrete Component
class Male extends IComponent
{
    public function setAge($ageNow)
    {
        $this->date="Male";
        $this->setFeature("<br/>Dude programmer features: ");
    }

    public function getAge()
    {
        return $this->ageGroup;
    }

    public function getFeature()
    {
        return $this->feature;
    }

    public function setFeature($fea)
    {
        $this->feature=$fea;
    }
}