<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 21:36
 */

namespace Bridge;

require_once "../../Herramientas.php";
require_once "FormularioImpl.php";

class FormHtmlImpl implements FormularioImpl
{
    public function dibujaTexto($texto)
    {
        \Herramientas::println("HTML: $texto");
    }

    public function administraZonaIndicada()
    {
        return \Herramientas::readln();
    }
}