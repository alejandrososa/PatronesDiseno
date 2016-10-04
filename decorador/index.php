<?php
/**
 * Creado con PhpStorm.
 * patronesdiseno
 * Desarrollador: Alejandro Sosa
 * Fecha: 26/9/2016
 * Hora: 20:52
 */

//Client.php
/*Age groups:
 18-29: Group 1
 30-39: Group 2
 40-49: Group 3
 50+ : Group 4
*/

function __autoload( $nombreclass ) {
    //incluir el archivo de la clase
    include_once $nombreclass . '.php';
}

class Client
{
    //$hotDate is component instance
    private $hotDate;
    public function __construct()
    {
        $this->hotDate=new Male();
//        $this->hotDate=new Female();
        $this->hotDate->setAge("Age Group 4");
        echo $this->hotDate->getAge();
        $this->hotDate=$this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }
    private function wrapComponent(IComponent $component)
    {
        $component=new ProgramLang($component);
        $component->setFeature("php");
        $component=new Hardware($component);
        $component->setFeature("lin");
        $component=new Food($component);
        $component->setFeature("veg");
        return $component;
    }
}
$worker=new Client();