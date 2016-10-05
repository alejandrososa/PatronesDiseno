<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 20:15
 */

namespace Prototype;


abstract class Documento
{
    /**
     * @var string
     */
    protected $contenido = "";

    /**
     * @return null|Documento
     */
    public function duplica()
    {
        $resultado= null;
        try        {
            $resultado = clone $this;
        }
        catch (CloneNotSupportedException $exception)
        {
            return null;
        }
        return $resultado;
    }

    /**
     *
     * @param string $informacion
     */
    public function rellena($informacion)
    {
        $this->contenido = $informacion;
    }

    public abstract function imprime();
    public abstract function muestra();
}