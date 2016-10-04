<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 4/10/2016
 * Hora: 22:08
 */

namespace builder;


abstract class Documento
{
    /**
     *
     * @var "Lista de string"
     */
    protected $contenido = array();

    /**
     * @param string $documento
     */
    public abstract function agregaDocumento($documento);

    public abstract function imprime();
}