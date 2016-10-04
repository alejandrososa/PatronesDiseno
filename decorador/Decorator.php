<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 26/9/2016
 * Hora: 20:49
 */

//Decorator participant
abstract class Decorator extends IComponent
{
    public function setAge($ageNow)
    {
        $this->ageGroup=$this->ageGroup;
    }
    public function getAge()
    {
        return $this->ageGroup;
    }
}