<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 20:50
 */

namespace Singleton;

require_once "../../Herramientas.php";

class Comercial
{
    /**
     *
     * @var string
     */
    protected $nombre;
    /**
     *
     * @var string
     */
    protected $direccion;
    /**
     *
     * @var string
     */
    protected $email;

    /**
     * @var Comercial
     */
    private static $instance = null;

    /**
     * constructor de visibilidad privada
     */
    private function __construct()
    {
    }

    /**
     * @return Comercial
     */
    public static function Instance()
    {
        if (!isset(Comercial::$instance)) {
            Comercial::$instance = new Comercial();
        }
        return Comercial::$instance;
    }

    public function muestra()
    {
        \Herramientas::println("Nombre: $this->nombre");
        \Herramientas::println("Dirección: $this->direccion");
        \Herramientas::println("Email: $this->email");
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     *
     * @param string $nombre
     */
    public function setNombre ($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     *
     * @param string $direccion
     */
    public function setDireccion ($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *
     * @param string $email
     */
    public function setEmail ($email)
    {
        $this->email = $email;
    }
}