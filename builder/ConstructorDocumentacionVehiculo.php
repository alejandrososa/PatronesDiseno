<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 4/10/2016
 * Hora: 22:14
 */

namespace builder;


abstract class ConstructorDocumentacionVehiculo
{
    /**
     * @var Documento
     */
    protected $documento;

    /**
     * @param string $nombreCliente
     */
    public abstract function generaFormularioPedido($nombreCliente);

    /**
     *
     * @param string $nombreSolicitante
     */
    public abstract function generaSolicitudMatriculacion(
        $nombreSolicitante);

    /**
     * @return Documento
     */
    public function resultado()
    {
        return $this->documento;
    }

}