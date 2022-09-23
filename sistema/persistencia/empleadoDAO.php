<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

class EmpleadoDAO{
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
    public $curp;
    public $nss;
    public $ine;
    public $tipoEmpleado;
    public $password;
    public $sucursal;
                         
    public function __construct($id="", $fecha="", $nombre="", $apellidoPaterno="", $apellidoMaterno="", $direccion="", $colonia="", $ciudad="", $estado="", $cp="", $telefono="", $email="", $rfc="", $curp="", $nss="", $ine="", $tipoEmpleado="", $password="", $sucursal=""){
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
        $this->curp = $curp;
        $this->nss = $nss;
        $this->ine = $ine;
        $this->tipoEmpleado = $tipoEmpleado;
        $this->password = $password;
        $this->sucursal = $sucursal;
    }    

    public function autentificacionpaciente($id, $password){
            return "SELECT * FROM empleados WHERE Email='$id' AND Password=\"" . md5($password) . "\"";
        }

    public function consultarTodo(){
        return "SELECT * FROM empleados";
    }
    
    public function insertar(){
        $password ="";
        $password = md5($this-> password);
        return "INSERT INTO empleados (Fecha, Nombre, ApellidoPaterno, ApellidoMaterno, Direccion, Colonia, Ciudad, Estado, CP, Telefono, Email, RFC, CURP, NSS, INE, TipoEmpleado, Password, Sucursal) VALUES ('$this->fecha','$this->nombre', '$this->apellidoPaterno', '$this->apellidoMaterno', '$this->direccion', '$this->colonia', '$this->ciudad', '$this->estado', '$this->cp', '$this->telefono', '$this->email', '$this->rfc', '$this->curp', '$this->nss', '$this->ine', '$this->tipoEmpleado', '$password', '$this->sucursal')";
    }
    public function buscarPorId($id){
        return "SELECT * FROM empleados WHERE Id='$id'";
    }

}


?>