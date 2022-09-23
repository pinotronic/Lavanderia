<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include_once 'persistencia/clienteDAO.php';
include_once 'persistencia/conexion.php';
class Cliente{
    public $id;
    public $fecha;
    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $direccion;
    public $colonia;
    public $ciudad;
    public $estado;
    public $cp;
    public $telefono;
    public $email;
    public $rfc;
    public $regimenFiscal;

    function setID($id){
        $this->id = $id;
    }
    function getID(){
        return $this->id;
    }
    function setFecha($fecha){
        $this->fecha = $fecha;
    }
    function getFecha(){
        return $this->fecha;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setApellidoPaterno($apellidoPaterno){
        $this->apellidoPaterno = $apellidoPaterno;
    }
    function getApellidoPaterno(){
        return $this->apellidoPaterno;
    }
    function setApellidoMaterno($apellidoMaterno){
        $this->apellidoMaterno = $apellidoMaterno;
    }
    function getApellidoMaterno(){
        return $this->apellidoMaterno;
    }
    function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    function getDireccion(){
        return $this->direccion;
    }
    function setColonia($colonia){
        $this->colonia = $colonia;
    }
    function getColonia(){
        return $this->colonia;
    }
    function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }
    function getCiudad(){
        return $this->ciudad;
    }
    function setEstado($estado){
        $this->estado = $estado;
    }
    function getEstado(){
        return $this->estado;
    }
    function setCP($cp){
        $this->cp = $cp;
    }
    function getCP(){
        return $this->cp;
    }
    function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    function getTelefono(){
        return $this->telefono;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function getEmail(){
        return $this->email;
    }
    function setRFC($rfc){
        $this->rfc = $rfc;
    }
    function getRFC(){
        return $this->rfc;
    }
    function setRegimenFiscal($regimenFiscal){
        $this->regimenFiscal = $regimenFiscal;
    }
    function getRegimenFiscal(){
        return $this->regimenFiscal;
    }    
    
    public function __construct($id="", $fecha="", $nombre="", $apellidoPaterno="", $apellidoMaterno="", $direccion="", $colonia="", $ciudad="", $estado="", $cp="", $telefono="", $email="", $rfc="", $regimenFiscal=""){
        $this->id = $id;
        $this->fecha = $fecha;
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->direccion = $direccion;
        $this->colonia = $colonia;
        $this->ciudad = $ciudad;
        $this->estado = $estado;
        $this->cp = $cp;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->rfc = $rfc;
        $this->regimenFiscal = $regimenFiscal;

        $this -> clienteDAO = new ClienteDAO($this -> id, $this -> fecha, $this -> nombre, $this -> apellidoPaterno, $this -> apellidoMaterno, $this -> direccion, $this -> colonia, $this -> ciudad, $this -> estado, $this -> cp, $this -> telefono, $this -> email, $this -> rfc, $this -> regimenFiscal);
        $this -> conexion = new Conexion();
    }
    
    public function insertar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> insertar());
        $this -> conexion -> cerrar();
    }

    public function actualizar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> actualizar());
        $this -> conexion -> cerrar();
    }

    public function eliminar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> eliminar());
        $this -> conexion -> cerrar();
    }

    public function buscar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> buscar());
        $resultado = $this -> conexion -> extraer();
        if(!empty($resultado)){
            $this -> id = $resultado[0];
            $this -> fecha = $resultado[2];
            $this -> nombre = $resultado[3];
            $this -> apellidoPaterno = $resultado[4];
            $this -> apellidoMaterno = $resultado[5];
            $this -> direccion = $resultado[6];
            $this -> colonia = $resultado[7];
            $this -> ciudad = $resultado[8];
            $this -> estado = $resultado[9];
            $this -> cp = $resultado[10];
            $this -> telefono = $resultado[11];
            $this -> email = $resultado[12];
            $this -> rfc = $resultado[13];
            $this -> regimenFiscal = $resultado[14];
            $this -> conexion -> close();
        }else{
            $this -> conexion -> close();
            return false;
        }
    }

    public function buscarArray(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> buscar());
        $cliente =array();
        while ($resultado = $this -> conexion -> extraer()){
            if(!empty($resultado)){
                array_push($cliente, new Cliente($resultado[0],
                                                $resultado[1],
                                                $resultado[2],
                                                $resultado[3],
                                                $resultado[4],
                                                $resultado[5],
                                                $resultado[6],
                                                $resultado[7],
                                                $resultado[8],
                                                $resultado[9],
                                                $resultado[10],
                                                $resultado[11],
                                                $resultado[12],
                                                $resultado[13]));
            }
        }
        $this -> conexion -> close();
        return $cliente;
    }

    public function buscarporId(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> buscarporId());
        $resultado = $this -> conexion -> extraer();
        if(!empty($resultado)){
            $this -> id = $resultado[0];
            $this -> fecha = $resultado[1];
            $this -> nombre = $resultado[2];
            $this -> apellidoPaterno = $resultado[3];
            $this -> apellidoMaterno = $resultado[4];
            $this -> direccion = $resultado[5];
            $this -> colonia = $resultado[6];
            $this -> ciudad = $resultado[7];
            $this -> estado = $resultado[8];
            $this -> cp = $resultado[9];
            $this -> telefono = $resultado[10];
            $this -> email = $resultado[11];
            $this -> rfc = $resultado[12];
            $this -> regimenFiscal = $resultado[13];
            $this -> conexion -> close();
        }else{
            $this -> conexion -> close();
            return false;
        }
    }
    public function buscarporNombreApellidoPaterno(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> buscarporNombreApellidoPaterno());
        $resultado = $this -> conexion -> extraer();
        if(!empty($resultado)){
            $this -> id = $resultado[0];
            $this -> fecha = $resultado[1];
            $this -> nombre = $resultado[2];
            $this -> apellidoPaterno = $resultado[3];
            $this -> apellidoMaterno = $resultado[4];
            $this -> direccion = $resultado[5];
            $this -> colonia = $resultado[6];
            $this -> ciudad = $resultado[7];
            $this -> estado = $resultado[8];
            $this -> cp = $resultado[9];
            $this -> telefono = $resultado[10];
            $this -> email = $resultado[11];
            $this -> rfc = $resultado[12];
            $this -> regimenFiscal = $resultado[13];
            $this -> conexion -> close();
        }else{
            $this -> conexion -> close();
            return false;
        }
    }

    public function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> consultarTodo());
        $registros = array();        
        for($i = 0; $i < $this -> conexion -> numFilas(); $i++){
            $resultado = $this -> conexion -> extraer();
            
            $registros[$i] = new Cliente($resultado[0],
                                            $resultado[1],
                                            $resultado[2],
                                            $resultado[3],
                                            $resultado[4],
                                            $resultado[5],
                                            $resultado[6],
                                            $resultado[7],
                                            $resultado[8],
                                            $resultado[9],
                                            $resultado[10],
                                            $resultado[11],
                                            $resultado[12],
                                            $resultado[13]);
        }
        $this -> conexion -> close();
        return $registros;
    }
       
}
?>