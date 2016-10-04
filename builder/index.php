<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 4/10/2016
 * Hora: 22:21
 */

namespace builder;

require_once "../Herramientas.php";
require_once 'ConstructorDocumentacionVehiculoHtml.php';
require_once 'ConstructorDocumentacionVehiculoPdf.php';
require_once 'Vendedor.php';
  
$opcion = \Herramientas::readln('¿Desea generar documentación HTML (1) o PDF (2)?:');

if ($opcion == '1')
{
    $constructor = new ConstructorDocumentacionVehiculoHtml();
} 
else 
{
    $constructor = new ConstructorDocumentacionVehiculoPdf();
} 
  
$vendedor = new Vendedor($constructor); 
$documento = $vendedor->generado('Martín'); 
$documento->imprime(); 