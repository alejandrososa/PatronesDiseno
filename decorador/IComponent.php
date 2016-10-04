<?php

/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 26/9/2016
 * Hora: 20:43
 */

abstract class IComponent
{
    protected $date;
    protected $ageGroup;
    protected $feature;
    abstract public function setAge($ageNow);
    abstract public function getAge();
    abstract public function getFeature();
    abstract public function setFeature($fea);
}