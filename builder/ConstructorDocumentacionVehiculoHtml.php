<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 4/10/2016
 * Hora: 22:15
 */

namespace builder;

require_once "ConstructorDocumentacionVehiculo.php";
require_once "DocumentacionHTML.php";

class ConstructorDocumentacionVehiculoHtml extends ConstructorDocumentacionVehiculo
{
    /**
     * ConstructorDocumentacionVehiculoHtml constructor.
     */
    public function __construct()
    {
        $this->documento = new DocumentacionHtml();
    }

    /**
     * @param string $nombreCliente
     */
    public function generaFormularioPedido($nombreCliente)
    {
        $documento = "<HTML>Formulario de solicitud del cliente: $nombreCliente</HTML>";
        $this->documento->agregaDocumento($documento);
    }

    /**
     * @param string $nombreSolicitante
     */
    public function generaSolicitudMatriculacion(
        $nombreSolicitante)
    {
        $documento = '<HTML>Solicitud de matriculación ' . "Solicitante: $nombreSolicitante</HTML>"; 
        $this->documento->agregaDocumento($documento); 
    }
}  