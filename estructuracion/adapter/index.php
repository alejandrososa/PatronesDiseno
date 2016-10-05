<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 21:19
 */

namespace Adapter;

require_once '../../Herramientas.php';  
require_once 'DocumentoHtml.php'; 
require_once 'DocumentoPdf.php'; 
  
$documento1 = new DocumentoHtml(); 
$documento1->setContenido('Hello'); 
$documento1->dibuja(); 
 
\Herramientas::println(); 
 
$documento2 = new DocumentoPdf(); 
$documento2->setContenido('Hola'); 
$documento2->dibuja(); 