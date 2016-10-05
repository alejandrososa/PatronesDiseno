<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 4/10/2016
 * Hora: 21:01
 */

namespace factoryMethod;


abstract class Pedido
{
    /**
     * @var double
     */
    protected $cantidad;

    /**
     * @param double $cantidad
     */
    public function __construct($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return boolean
     */
    public abstract function valida();

    /**
     * @return void
     */
    public abstract function pago();
}