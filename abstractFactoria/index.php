<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 3/10/2016
 * Hora: 22:33
 */

namespace abstractFactoria;

require_once "../Herramientas.php";
require_once "FabricaVehiculoElectrico.php";
require_once "FabricaVehiculoGasolina.php";

define('NUM_AUTOS', 3);
define('NUM_SCOOTERS', 2);

$autos = [];
$scooters = [];

$opcion = \Herramientas::readln('Desea utilizar vehículos eléctricos (1) o de gasolina (2): ');

if($opcion == '1'){
    $fabrica = new FabricaVehiculoElectrico();
}else{
    $fabrica = new FabricaVehiculoGasolina();
}

for($index = 0; $index < NUM_AUTOS; $index++){
    $autos[$index] = $fabrica->crearAutomovil('estandar', 'amarillo', 6 + $index, 3.2);
}
for($index = 0; $index < NUM_SCOOTERS; $index++){
    $autos[$index] = $fabrica->crearScooter('clásico', 'rojo', 2 + $index);
}

foreach ($autos as $auto) {
    $auto->mostrarCaracteristicas();
}
foreach ($scooters as $scooter) {
    $scooter->mostrarCaracteristicas();
}

