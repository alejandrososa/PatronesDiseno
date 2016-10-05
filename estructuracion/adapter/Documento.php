<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 21:12
 */

namespace Adapter;


interface Documento
{
    /**
     * @param string $contenido
     */
    function setContenido($contenido);
    function dibuja();
    function imprime();
}