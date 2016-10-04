<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 3/10/2016
 * Hora: 21:56
 */

namespace abstractFactoria;

require_once "Automovil.php";
require_once "../Herramientas.php";

class AutomovilElectrico extends Automovil
{
    /**
     * AutomovilElectrico constructor.
     * @param $modelo
     * @param $color
     * @param $potencia
     * @param $espacio
     */
    public function __construct($modelo, $color, $potencia, $espacio)
    {
        parent::__construct($modelo, $color, $potencia, $espacio);
    }

    public function mostrarCaracteristicas()
    {
        $txt = "Automovil eléctrico de modelo: ". $this->modelo;
        $txt .=  ", de color: ". $this->color;
        $txt .=  ", de potencia: ". $this->potencia;
        $txt .=  ", de espacio: ". $this->espacio;
        \Herramientas::println($txt);
    }
}