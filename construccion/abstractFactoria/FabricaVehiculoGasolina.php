<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 3/10/2016
 * Hora: 22:28
 */

namespace abstractFactoria;

require_once "FabricaVehiculo.php";
require_once "AutomovilGasolina.php";
require_once "ScooterGasolina.php";

class FabricaVehiculoGasolina implements FabricaVehiculo
{

    /**
     * @param $modelo
     * @param $color
     * @param $potencia
     * @param $espacio
     * @return mixed
     */
    public function crearAutomovil($modelo, $color, $potencia, $espacio)
    {
        return new AutomovilGasolina($modelo, $color, $potencia, $espacio);
    }

    /**
     * @param $modelo
     * @param $color
     * @param $potencia
     * @param $espacio
     * @return mixed
     */
    public function crearScooter($modelo, $color, $potencia)
    {
        return new ScooterGasolina($modelo, $color, $potencia);
    }
}