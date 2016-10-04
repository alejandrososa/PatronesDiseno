<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 26/9/2016
 * Hora: 20:55
 */

//Concrete decorator
class Hardware extends Decorator
{
    private $hardwareNow;

    private $box = [
        "mac"=>"Macintosh",
        "dell"=>"Dell",
        "hp"=>"Hewlett-Packard",
        "lin"=>"Linux"
    ];

    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    public function getFeature()
    {
        $output=$this->date->getFeature();
        $fmat="<br/>&nbsp;&nbsp;";
        $output .="$fmat Current Hardware: ";
        $output .= $this->hardwareNow;
        return $output;
    }

    public function setFeature($fea)
    {
        $this->hardwareNow=$this->box[$fea];
    }
}