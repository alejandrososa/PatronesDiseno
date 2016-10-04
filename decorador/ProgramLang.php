<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 26/9/2016
 * Hora: 20:52
 */

//Concrete decorator
class ProgramLang extends Decorator
{
    private $languageNow;
    private $language = [
        "php"=>"PHP",
        "cs"=>"C#",
        "js"=>"JavaScript",
        "as3"=>"ActionScript 3.0"
    ];

    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    public function getFeature()
    {
        $output=$this->date->getFeature();
        $fmat="<br/>&nbsp;&nbsp;";
        $output .="$fmat Preferred programming language: ";
        $output .= $this->languageNow;
        return $output;
    }

    public function setFeature($fea)
    {
        $this->languageNow=$this->language[$fea];
    }
}