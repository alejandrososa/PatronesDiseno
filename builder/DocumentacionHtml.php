<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 4/10/2016
 * Hora: 22:09
 */

namespace builder;

require_once "../Herramientas.php";
require_once "Documento.php";

class DocumentacionHTML extends Documento
{
    /**
     * @param string $documento
     */
    public function agregaDocumento($documento)
    {
        if (\Herramientas::str_start_with($documento, '<HTML>')) 
        {
            $this->contenido [] = $documento;
        }  
    }

    public function imprime()
    {
        \Herramientas::println('Documento HTML');  
        foreach ($this->contenido as $s)
        {
            \Herramientas::println($s);
        }  
    }
}  