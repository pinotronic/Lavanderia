<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include_once 'persistencia/empleadoDAO.php';
include_once 'persistencia/conexion.php';

class Empleado{
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
    public $email;
    public $telefono;
    public $rfc;
    public $curp;
    public $nss;
    public $ine;    
    public $tipoEmpleado;
    public $password;
    public $sucursal;

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

    function setEmail($email){
        $this->email = $email;
    }

    function getEmail(){
        return $this->email;
    }

    function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    function getTelefono(){
        return $this->telefono;
    }

    function setRFC($rfc){
        $this->rfc = $rfc;
    }

    function getRFC(){
        return $this->rfc;
    }

    function setCURP($curp){
        $this->curp = $curp;
    }

    function getCURP(){
        return $this->curp;
    }

    function setNSS($nss){
        $this->nss = $nss;
    }

    function getNSS(){
        return $this->nss;
    }

    function setINE($ine){
        $this->ine = $ine;
    }

    function getINE(){
        return $this->ine;
    }

    function setTipoEmpleado($tipoEmpleado){
        $this->tipoEmpleado = $tipoEmpleado;
    }

    function getTipoEmpleado(){
        return $this->tipoEmpleado;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function getPassword(){
        return $this->password;
    }
    function setSucursal($sucursal){
        $this->sucursal = $sucursal;
    }

    function getSucursal(){
        return $this->sucursal;
    }

    function __construct($id="", $fecha="", $nombre="", $apellidoPaterno="", $apellidoMaterno="", $direccion="", $colonia="", $ciudad="", $estado="", $cp="", $email="", $telefono="", $rfc="", $curp="", $nss="", $ine="", $tipoEmpleado="", $password="", $sucursal=""){
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
        $this->email = $email;
        $this->telefono = $telefono;
        $this->rfc = $rfc;
        $this->curp = $curp;
        $this->nss = $nss;
        $this->ine = $ine;
        $this->tipoEmpleado = $tipoEmpleado;
        $this->password = $password;
        $this->sucursal = $sucursal;
        $this -> conexion = new Conexion();
        $this -> empleadoDAO = new EmpleadoDAO($this -> id, $this -> fecha, $this -> nombre, $this -> apellidoPaterno, $this -> apellidoMaterno, $this -> direccion, $this -> colonia, $this -> ciudad, $this -> estado, $this -> cp, $this -> email, $this -> telefono, $this -> rfc, $this -> curp, $this -> nss, $this -> ine, $this -> tipoEmpleado, $this -> password, $this -> sucursal);
    }

    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> empleadoDAO -> consultar());
        $registro = $this -> conexion -> extraer();
        $this -> id = $registro[0];
        $this -> fecha = $registro[1];
        $this -> nombre = $registro[2];
        $this -> apellidoPaterno = $registro[3];
        $this -> apellidoMaterno = $registro[4];
        $this -> direccion = $registro[5];
        $this -> colonia = $registro[6];
        $this -> ciudad = $registro[7];
        $this -> estado = $registro[8];
        $this -> cp = $registro[9];
        $this -> email = $registro[10];
        $this -> telefono = $registro[11];
        $this -> rfc = $registro[12];
        $this -> curp = $registro[13];
        $this -> nss = $registro[14];
        $this -> ine = $registro[15];
        $this -> tipoEmpleado = $registro[16];
        $this -> password = $registro[17];
        $this -> sucursal = $registro[18];
        $this -> conexion -> close();
    }

    public function insertar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> empleadoDAO -> insertar());
        $this -> conexion -> close();
    }

    public function actualizar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> empleadoDAO -> actualizar());
        $this -> conexion -> close();
    }

    public function eliminar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> empleadoDAO -> eliminar());
        $this -> conexion -> close();
    }

    public function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> empleadoDAO -> consultarTodos());
        $registros = array();
        for($i = 0; $i < $this -> conexion -> numFilas(); $i++){
            $registro = $this -> conexion -> extraer();
            $registros[$i] = new Cliente($registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9], $registro[10], $registro[11], $registro[12], $registro[13], $registro[14], $registro[15], $registro[16]);
        }
        $this -> conexion -> close();
        return $registros;        
    }

    public function consultarTodosFiltro($filtro){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> empleadoDAO -> consultarTodosFiltro($filtro));
        $registros = array();
        for($i = 0; $i < $this -> conexion -> numFilas(); $i++){
            $registro = $this -> conexion -> extraer();
            $registros[$i] = new Empleado($registro[0], $registro[1], $registro[2], $registro[3], $registro[4], $registro[5], $registro[6], $registro[7], $registro[8], $registro[9], $registro[10], $registro[11], $registro[12], $registro[13], $registro[14], $registro[15], $registro[16]);
        }
        return $registros;
        $this -> conexion -> close();
    }

    public function autentificacionpaciente($id, $clave){

        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> empleadoDAO -> autentificacionpaciente($id, $clave));
        if($this -> conexion -> numFilas() == 1){
            $registro = $this -> conexion -> extraer();
            $this -> id = $registro[0];
            $this -> fecha = $registro[1];
            $this -> nombre = $registro[2];
            $this -> apellidoPaterno = $registro[3];
            $this -> apellidoMaterno = $registro[4];
            $this -> direccion = $registro[5];
            $this -> colonia = $registro[6];
            $this -> ciudad = $registro[7];
            $this -> estado = $registro[8];
            $this -> cp = $registro[9];
            $this -> email = $registro[10];
            $this -> telefono = $registro[11];
            $this -> rfc = $registro[12];
            $this -> curp = $registro[13];
            $this -> nss = $registro[14];
            $this -> ine = $registro[15];
            $this -> tipoEmpleado = $registro[16];
            $this -> password = $registro[17];
            $this -> sucursal = $registro[18];
            $this -> conexion -> close();
            return true;
        }else{
            $this -> conexion -> close();
            return false;
        }        
    }  

    public function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> empleadoDAO -> consultarTodo());
        $empleado = array();
        while ($resultado = $this -> conexion -> extraer()){  

            if(!empty($resultado)){
                array_push($empleado, new Empleado($resultado[0],
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
                $resultado[13], 
                $resultado[14], 
                $resultado[15], 
                $resultado[16], 
                $resultado[17],
                $resultado[18]));
            }            
        }
            $this -> conexion -> close(); 
            return $empleado;
    }

    public function buscarPorId($id){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> empleadoDAO -> buscarPorId($id));
        if($this -> conexion -> numFilas() == 1){
            $registro = $this -> conexion -> extraer();
            $this -> id = $registro[0];
            $this -> fecha = $registro[1];
            $this -> nombre = $registro[2];
            $this -> apellidoPaterno = $registro[3];
            $this -> apellidoMaterno = $registro[4];
            $this -> direccion = $registro[5];
            $this -> colonia = $registro[6];
            $this -> ciudad = $registro[7];
            $this -> estado = $registro[8];
            $this -> cp = $registro[9];
            $this -> email = $registro[10];
            $this -> telefono = $registro[11];
            $this -> rfc = $registro[12];
            $this -> curp = $registro[13];
            $this -> nss = $registro[14];
            $this -> ine = $registro[15];
            $this -> tipoEmpleado = $registro[16];
            $this -> password = $registro[17];
            $this -> sucursal = $registro[18];
            $this -> conexion -> close();
            return true;
        }else{
            $this -> conexion -> close();
            return false;
        }  


    }
}
?>