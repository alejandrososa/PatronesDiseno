<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 4/10/2016
 * Hora: 22:19
 */

namespace builder;

require_once "ConstructorDocumentacionVehiculo.php";

/**
 * Class Vendedor
 * @package builder
 */
class Vendedor
{
    /**
     * @var ConstructorDocumentacionVehiculo
     */
    protected $constructor;

    /**
     * @param ConstructorDocumentacionVehiculo $constructor
     */
    public function __construct(ConstructorDocumentacionVehiculo $constructor)
    {
        $this->constructor = $constructor;
    }

    /**
     * @param string $nombreCliente
     * @return Documento
     */
    public function generado($nombreCliente)
    {
        $this->constructor->generaFormularioPedido($nombreCliente);
        $this->constructor->generaSolicitudMatriculacion($nombreCliente);
        return $this->constructor->resultado();
    }
}