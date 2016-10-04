<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 3/10/2016
 * Hora: 22:02
 */

namespace abstractFactoria;

require_once "Scooter.php";
require_once "../Herramientas.php";

class ScooterElectrico extends Scooter
{
    protected $modelo;
    protected $color;
    protected $potencia;

    /**
     * ScooterElectrico constructor.
     * @param $modelo
     * @param $color
     * @param $potencia
     */
    public function __construct($modelo, $color, $potencia)
    {
        parent::__construct($modelo, $color, $potencia);
    }

    public function mostrarCaracteristicas()
    {
        $txt = "Scooter eléctrico de modelo: ". $this->modelo;
        $txt .=  ", de color: ". $this->color;
        $txt .=  ", de potencia: ". $this->potencia;
        \Herramientas::println($txt);
    }
}