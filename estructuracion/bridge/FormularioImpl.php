<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 21:35
 */

namespace Bridge;


interface FormularioImpl
{
    /**
     * @param string $texto
     */
    function dibujaTexto($texto);
    
    /**
     * @return string
     */
    function administraZonaIndicada();
} 