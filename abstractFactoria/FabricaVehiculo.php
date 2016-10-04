<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 3/10/2016
 * Hora: 21:36
 */

namespace abstractFactoria;


interface FabricaVehiculo
{
    /**
     * @param $modelo
     * @param $color
     * @param $potencia
     * @param $espacio
     * @return mixed
     */
    public function crearAutomovil($modelo, $color, $potencia, $espacio);

    /**
     * @param $modelo
     * @param $color
     * @param $potencia
     * @param $espacio
     * @return mixed
     */
    public function crearScooter($modelo, $color, $potencia);
}