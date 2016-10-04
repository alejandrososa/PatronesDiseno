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
require_once "DocumentacionPDF.php";

class ConstructorDocumentacionVehiculoPdf extends ConstructorDocumentacionVehiculo
{
    /**
     * ConstructorDocumentacionVehiculoPdf constructor.
     */
    public function __construct()
    {
        $this->documento = new DocumentacionPDF();
    }

    /**
     * @param string $nombreCliente
     */
    public function generaFormularioPedido($nombreCliente)
    {
        $documento = "<PDF>Formulario de solicitud del cliente: $nombreCliente</PDF>";
        $this->documento->agregaDocumento($documento);
    }

    /**
     * @param string $nombreSolicitante
     */
    public function generaSolicitudMatriculacion(
        $nombreSolicitante)
    {
        $documento = '<PDF>Solicitud de matriculación ' . "Solicitante: $nombreSolicitante</PDF>"; 
        $this->documento->agregaDocumento($documento); 
    }
}  