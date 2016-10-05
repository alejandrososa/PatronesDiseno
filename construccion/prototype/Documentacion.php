<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 20:20
 */

namespace Prototype;


abstract class Documentacion implements \IteratorAggregate
{
    /**
     *
     * @var \ArrayObject
     */
    protected $documentos;

    /**
     * @return \ArrayIterator
     */
    public function getIterator () {
        return $this->documentos->getIterator();
    }
}