<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 5/10/2016
 * Hora: 21:16
 */

namespace Adapter;

require_once "../../Herramientas.php";

class ComponentePdf
{
    /**
     * @var string
     */
    protected $contenido;

    /**
     * @param string $contenido
     */
    public function pdfFijaContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function pdfPreparaVisualizacion()
    {
        \Herramientas::println ('Visualiza PDF: Comienzo');
    }

    public function pdfRefresca ()
    {
        \Herramientas::println ("Visualiza contenido PDF: $this->contenido");
    }
    
    public function pdfTerminaVisualizacion()
    {
        \Herramientas::println ('Visualiza PDF: Fin'); 
    }

    public function pdfEnviaImpresora ()    {
        \Herramientas::println("Impresión PDF: $this->contenido");
    }
}