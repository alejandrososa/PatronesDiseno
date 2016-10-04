<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 4/10/2016
 * Hora: 21:10
 */

namespace builder;

require_once "Cliente.php";
require_once "PedidoContado.php";

class ClienteContado extends Cliente
{

    /**
     * @param double $cantidad
     * @return Pedido
     */
    protected function creaPedido($cantidad)
    {
        return new PedidoContado($cantidad);
    }
}