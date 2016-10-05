<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 20:18
 */

namespace Prototype;

require_once "Documento.php";
require_once "../../Herramientas.php";

class CertificadoCesion extends Documento
{
    
    public function muestra()
    {
        \Herramientas::println("Muestra el certificado de cesión: $this->contenido");
    }

    public function imprime()
    {
        \Herramientas::println("Imprime el certificado de cesión: $this->contenido");
    }
}

