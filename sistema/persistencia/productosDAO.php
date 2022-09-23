<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

class ProductosDAO{
    public $id;
    public $descripcion;
    public $factor;
    public $precio;
    public $planchado;
    public $puntos;
    public $piezas;
    public $descuento;

    public function __construct($id="", $descripcion="", $factor="", $precio="", $planchado="", $puntos="", $piezas="", $descuento=""){
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->factor = $factor;
        $this->precio = $precio;
        $this->planchado = $planchado;
        $this->puntos = $puntos;
        $this->piezas = $piezas;
        $this->descuento = $descuento;
    }

    public function consultarTodo(){
        return "SELECT * FROM productos";
    }
    public function insertar(){
        return "INSERT INTO productos VALUES ('".$this->id."', '".$this->descripcion."', '".$this->factor."', '".$this->precio."', '".$this->planchado."', '".$this->puntos."', '".$this->piezas."', '".$this->descuento."')";
    }
    public function buscarId($id){
        return "SELECT * FROM productos WHERE id = '".$id."'";
    }
}