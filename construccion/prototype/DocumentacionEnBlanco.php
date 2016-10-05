<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 20:22
 */

namespace Prototype;

require_once "Documentacion.php";

class DocumentacionEnBlanco extends Documentacion
{
    /**
     * @var DocumentacionEnBlanco
     */
    private static $_instance = null;

    private function __construct()
    {
        $this->documentos = new \ArrayObject();
    }

    /**
     *
     * @return DocumentacionEnBlanco
     */
    public static function Instance()
    {
        if (!isset(DocumentacionEnBlanco::$_instance))
        {
            DocumentacionEnBlanco::$_instance = new
            DocumentacionEnBlanco();
        }
        return DocumentacionEnBlanco::$_instance;
    }

    /**
     *
     * @param Document $doc
     */
    public function añade(Documento $doc)
    {
        $this->documentos[] = $doc;
    }

    /**
     *
     * @param Document $doc
     */
    public function elimina(Documento $doc)
    {
        $index = null;
        foreach ($this->documentos as $clave => $valor) {
            if ($doc === $valor) {
                $index = $clave;
            }
        }
        if (isset($index)) {
            $this->documentos->offsetUnset($index);
        }
    }
} 