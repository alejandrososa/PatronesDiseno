<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 20:16
 */

namespace Prototype;

require_once "Documento.php";
require_once "../../Herramientas.php";

class OrdenDePedido extends Documento
{
    public function muestra()
    {
        \Herramientas::println(
            "Muestra el formulario de pedido: $this->contenido");
    }

    public function imprime()
    {
        System . out . println(
            "Imprime el formulario de pedido: $this->contenido");
    }
}