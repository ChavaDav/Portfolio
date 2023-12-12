<?php
include_once'Dispositivos.php';
class Movil extends Dispositivos
{
    //Crea la clase movil y hereda de dispositivos
    public $pulgadas;
    public $tipo_pantalla;
    public $conectividad;
  
    public function __construct($pulgadas,$tipo_pantalla,$conectividad) {
        $this->pulgadas = $pulgadas;
        $this->tipo_pantalla = $tipo_pantalla;
        $this->conectividad = $conectividad;
    }
    //Realiza los gets para obtener el valor de las variables
    public function getPulgadas() 
    {
        return $this->pulgadas;    
    }
    public function getTipo_Pantalla() 
    {
        return $this->tipo_pantalla;    
    }
    public function getConectividad() 
    {
        return $this->conectividad;    
    }
     //Realiza los sets para cambiar el valor de las variables
    public function setPulgadas($entrada)
    {
        $this->pulgadas=$entrada; 
    }
    public function setTipo_Pantalla($entrada)
    {
        $$this->tipo_pantalla=$entrada; 
    }
    public function setConectividad($entrada)
    {
        $this->conectividad=$entrada; 
    }
}
?>