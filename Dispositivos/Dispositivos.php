<?php
class Dispositivos
{
    //Esta es la clase base de la cual se crearan los moviles y los pcs
    public $id;
    public $marca;
    public $modelo;
    public $año;
    public function __construct($id,$marca,$modelo,$año) {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }
    public function getMarca() 
    {
        return $this->marca;    
    }
    public function getModelo() 
    {
        return $this->modelo;    
    }
    public function getAño() 
    {
        return $this->año;    
    }
    public function setAño($entrada)
    {
        $$this->año=$entrada; 
    }
    public function setMarca($entrada)
    {
        $$this->marca=$entrada; 
    }
    public function setModelo($entrada)
    {
        $this->modelo=$entrada; 
    }
}
?>