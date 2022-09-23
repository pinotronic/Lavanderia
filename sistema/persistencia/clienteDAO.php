<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

class clienteDAO{
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

    public function __construct($id="", $fecha="", $nombre="", $apellidoPaterno="", $apellidoMaterno="", $direccion="", $colonia="", $ciudad="", $estado="", $cp="", $telefono="", $email="", $rfc="", $regimenFiscal=""){
        $this->id = $id;
        $this -> fecha = $fecha;
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
    }

    public function insertar(){
        return "INSERT INTO clientes (nombre, fecha, apellidoPaterno, apellidoMaterno, direccion, colonia, ciudad, estado, cp, telefono, email, rfc, regimenFiscal) VALUES ('$this->nombre','$this->fecha', '$this->apellidoPaterno', '$this->apellidoMaterno', '$this->direccion', '$this->colonia', '$this->ciudad', '$this->estado', '$this->cp', '$this->telefono', '$this->email', '$this->rfc', '$this->regimenFiscal')";
    }
    public function actualizar(){
        return "UPDATE clientes SET fecha='$this->fecha', nombre='$this->nombre', apellidoPaterno='$this->apellidoPaterno', apellidoMaterno='$this->apellidoMaterno', direccion='$this->direccion', colonia='$this->colonia', ciudad='$this->ciudad', estado='$this->estado', cp='$this->cp', telefono='$this->telefono', email='$this->email', rfc='$this->rfc', regimenFiscal='$this->regimenFiscal' WHERE id='$this->id'";
    }
    public function eliminar(){
        return "DELETE FROM clientes WHERE id='$this->id'";
    }
    public function consultar(){
        return "SELECT * FROM clientes WHERE id='$this->id'";
    }
    public function buscarPorId($id){
        return "SELECT * FROM clientes WHERE id='$this->id'";
    }
    public function buscarporNombreApellidoPaterno(){
        return "SELECT * FROM clientes WHERE nombre='$this->nombre' AND apellidoPaterno='$this->apellidoPaterno'";
    }
    public function consultarTodo(){
        return "SELECT * FROM clientes";
    }


}

?>