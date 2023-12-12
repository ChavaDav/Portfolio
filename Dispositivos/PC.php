<?php
include_once'Dispositivos.php';
class PC extends Dispositivos
{
    //Crea la clase pc y hereda de dispositivos
    private $CPU;
    private $tarjeta_grafica;
    private $placa_base;
  
    public function __construct($CPU,$tarjeta_grafica,$placa_base) {
        $this->CPU = $CPU;
        $this->tarjeta_grafica = $tarjeta_grafica;
        $this->placa_base = $placa_base;
    }
     //Realiza los gets para obtener el valor de las variables
    public function getCPU() 
    {
        return $this->CPU;    
    }
    public function getTarjeta_Grafica() 
    {
        return $this->tarjeta_grafica;    
    }
    public function getPlaca_Base() 
    {
        return $this->placa_base;    
    }
    //Realiza los sets para cambiar el valor de las variables
    public function setCPU($entrada)
    {
        $this->CPU=$entrada; 
    }
    public function setTarjeta_Grafica($entrada)
    {
        $$this->tarjeta_grafica=$entrada; 
    }
    public function setPlaca_Base($entrada)
    {
        $this->placa_base=$entrada; 
    }
}
?>