<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 21:39
 */

namespace Bridge;

require_once "FormularioImpl.php";

abstract class FormularioMatriculacion
{
    /**
     * @var string
     */
    protected $contenido;

    /**
     * @var FormularioImpl
     */
    protected $implantacion;

    /**
     * @param FormularioImpl $implantacion
     */
    public function __construct(FormularioImpl $implantacion)
    {
        $this->implantacion = $implantacion;
    }

    public function muestra()
    {
        $this->implantacion->dibujaTexto('número de matrícula existente (' . $this->getLimite() . ') : ');
    }

    public function generaDocumento()
    {
        $this->implantacion->dibujaTexto('Solicitud de matriculación');
        $this->implantacion->dibujaTexto("número de matrícula: $this->contenido");
    }

    /**
     * @return boolean
     */
    public function administracionZona()
    {
        $this->contenido = $this->implantacion->administraZonaIndicada();
        return $this->controlaZona($this->contenido);
    }

    /**
     * @param string $matricula
     * @return boolean
     */
    protected abstract function controlaZona($matricula);

    /**
     * @return string
     */
    protected abstract function getLimite();
}