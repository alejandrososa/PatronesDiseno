<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 3/10/2016
 * Hora: 21:52
 */

namespace abstractFactoria;


abstract class Automovil
{
    protected $modelo;
    protected $color;
    protected $potencia;
    protected $espacio;

    /**
     * Automovil constructor.
     * @param $modelo
     * @param $color
     * @param $potencia
     * @param $espacio
     */
    public function __construct($modelo, $color, $potencia, $espacio)
    {
        $this->modelo = $modelo;
        $this->color = $color;
        $this->potencia = $potencia;
        $this->espacio = $espacio;
    }
    
    public abstract function mostrarCaracteristicas();
}