<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 3/10/2016
 * Hora: 22:02
 */

namespace abstractFactoria;


abstract class Scooter
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
        $this->modelo = $modelo;
        $this->color = $color;
        $this->potencia = $potencia;
    }
    
    public abstract function mostrarCaracteristicas();
}