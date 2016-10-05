<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 21:41
 */

namespace Bridge;

require_once "FormularioMatriculacion.php";

class FormMatriculacionEspaña extends FormularioMatriculacion
{
    const NUM_CARACTERES = 7;

    /**
     * @param FormularioImpl $implantacion
     */
    public function __construct($implantacion)
    {
        parent::__construct($implantacion);
    }

    protected function controlaZona($matricula)
    {
        return strlen($matricula) == FormMatriculacionEspaña::NUM_CARACTERES;
    }

    protected function getLimite()
    {
        return FormMatriculacionEspaña::NUM_CARACTERES . ' car.';
    }
}