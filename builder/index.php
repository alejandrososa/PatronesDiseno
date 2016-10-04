<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 4/10/2016
 * Hora: 21:12
 */

namespace FactoryMethod;

use builder\ClienteContado;
use builder\ClienteCredito;

require_once 'ClienteContado.php';
require_once 'ClienteCredito.php';

$cliente = new ClienteContado();
$cliente->nuevoPedido(2000.0);
$cliente->nuevoPedido(10000.0);

$cliente = new ClienteCredito();
$cliente->nuevoPedido(2000.0);
$cliente->nuevoPedido(10000.0);
