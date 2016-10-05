<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 21:46
 */

namespace Bridge;

require_once "../../Herramientas.php";
require_once "FormMatriculacionPortugal.php";
require_once "FormMatriculacionEspaña.php";
require_once "FormHtmlImpl.php";
require_once "FormAppletImpl.php";


$formulario1 = new FormMatriculacionPortugal(new FormHtmlImpl());
$formulario1->muestra();

if ($formulario1->administracionZona()) {
    $formulario1->generaDocumento();
}

\Herramientas::println();

$formulario2 = new FormMatriculacionEspaña(new FormAppletImpl());
$formulario2->muestra();

if ($formulario2->administracionZona()) {
    $formulario2->generaDocumento();
}