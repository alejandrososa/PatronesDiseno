<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 20:17
 */

namespace Prototype;

require_once "Documento.php";
require_once "../../Herramientas.php";

class SolicitudMatriculacion extends Documento
{
    public function muestra()
    {
        \Herramientas::println("Muestra la solicitud de matriculación: $this->contenido");
    }

    public function imprime()
    {
        \Herramientas::println("Imprime la solicitud de matriculación : $this->contenido");
    }
}