<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 20:24
 */

namespace Prototype;

require_once 'DocumentacionEnBlanco.php'; 
require_once 'OrdenDePedido.php'; 
require_once 'CertificadoCesion.php'; 
require_once 'SolicitudMatriculacion.php'; 
require_once 'DocumentacionCliente.php'; 
  
// inicialización de la documentación en blanco 
$documentoacionEnBlanco = DocumentacionEnBlanco::Instance(); 
$documentoacionEnBlanco->añade(new OrdenDePedido()); 
$documentoacionEnBlanco->añade(new CertificadoCesion()); 
$documentoacionEnBlanco->añade(new SolicitudMatriculacion()); 

// creación de una nueva documentación para dos clientes 
$documentoacionCliente1 = new DocumentacionCliente('Martín'); 
$documentoacionCliente2 = new DocumentacionCliente('Simón'); 
$documentoacionCliente1->muestra(); 
$documentoacionCliente2->muestra(); 