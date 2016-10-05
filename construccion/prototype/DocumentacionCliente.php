<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 20:23
 */

namespace Prototype;

require_once "Documentacion.php";

class DocumentacionCliente extends Documentacion
{
    /**
     *
     * @param string $informacion
     */
    public function __construct($informacion)
    {
        $this->documentos = new \ArrayObject();
        $laDocumentacionEnBlanco = DocumentacionEnBlanco::Instance();
        foreach ($laDocumentacionEnBlanco as $documento)
        {
            $copiaDocumento= $documento->duplica();
            $copiaDocumento->rellena($informacion);
            $this->documentos [] = $copiaDocumento;
        }
    }

    public function muestra()
    {
        foreach ($this as $documento) {
            $documento->muestra();
        }
    }

    public function imprime()
    {
        foreach ($this as $documento)
            $documento->imprime();
    }
}