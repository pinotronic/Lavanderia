<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include_once 'persistencia/productosDAO.php';
include_once 'persistencia/conexion.php';

class Productos{
    public $id;
    public $descripcion;
    public $factor;
    public $precio;
    public $planchado;
    public $puntos;
    public $piezas;
    public $descuento;

    function setID($id){
        $this->id = $id;
    }
    function getID(){
        return $this->id;
    }
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function setFactor($factor){
        $this->factor = $factor;
    }
    function getFactor(){
        return $this->factor;
    }
    function setPrecio($precio){
        $this->precio = $precio;
    }
    function getPrecio(){
        return $this->precio;
    }
    function setPlanchado($planchado){
        $this->planchado = $planchado;
    }
    function getPlanchado(){
        return $this->planchado;
    }
    function setPuntos($puntos){
        $this->puntos = $puntos;
    }
    function getPuntos(){
        return $this->puntos;
    }
    function setPiezas($piezas){
        $this->piezas = $piezas;
    }
    function getPiezas(){
        return $this->piezas;
    }
    function setDescuento($descuento){
        $this->descuento = $descuento;
    }
    function getDescuento(){
        return $this->descuento;
    }
    
    function __construct($id="", $descripcion="", $factor="", $precio="", $planchado ="", $puntos="", $piezas="", $descuento=""){
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->factor = $factor;
        $this->precio = $precio;
        $this->planchado = $planchado;
        $this->puntos = $puntos;
        $this->piezas = $piezas;
        $this->descuento = $descuento;
        $this -> conexion = new Conexion();
        $this -> productosDAO = new ProductosDAO($id, $descripcion, $factor, $precio, $planchado, $puntos, $piezas, $descuento);
    }



    public function insertar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productosDAO -> insertar());
        $this -> conexion -> close();
    }

    public function buscarId($id){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productosDAO -> buscarId($id));
        if($this -> conexion -> numFilas() == 1){
            $resultado = $this -> conexion -> extraer();
            $this -> id = $resultado[0]; 
            $this -> descripcion = $resultado[1]; 
            $this -> factor = $resultado[2]; 
            $this -> precio = $resultado[3]; 
            $this -> planchado = $resultado[4]; 
            $this -> puntos = $resultado[5]; 
            $this -> piezas = $resultado[6]; 
            $this -> descuento = $resultado[7];
            $this -> conexion -> close();
            return true;
        }else{
            $this -> conexion -> close();
            return false;
        }  
    }
    public function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productosDAO -> consultarTodo());
        $productos = array();
        while(($resultado = $this -> conexion -> extraer()) != null){
            array_push($productos, new Productos($resultado[0], $resultado[1], $resultado[2], $resultado[3], $resultado[4], $resultado[5], $resultado[6], $resultado[7]));
        }
        $this -> conexion -> close();
        return $productos;
    }

}
?>