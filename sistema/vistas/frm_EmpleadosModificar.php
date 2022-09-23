<?php
$id="";
$fechaRegistro="";
$nombre="";
$apellidoPaterno="";
$apellidoMaterno="";
$telefono="";
$direccion="";
$colonia="";
$ciudad="";
$estado="";
$cp="";
$correo="";
$rfc="";
$curp="";
$nss="";
$ine="";
$rol="";
$clave="";
$sucursal="";

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $empleado = new Empleado();
    $empleado -> buscarPorId($id);
    $seGuardo = true;
    $id = ($empleado ->getID());
    $fechaRegistro = ($empleado ->getFecha());
    $nombre = ($empleado ->getNombre());
    $apellidoPaterno = ($empleado ->getApellidoPaterno());
    $apellidoMaterno = ($empleado ->getApellidoMaterno());
    $telefono = ($empleado ->getTelefono());
    $direccion = ($empleado ->getDireccion());
    $colonia = ($empleado ->getColonia());
    $ciudad = ($empleado ->getCiudad());
    $estado = ($empleado ->getEstado());
    $cp = ($empleado ->getCP());
    $correo = ($empleado ->getEmail());
    $rfc = ($empleado ->getRFC());
    $curp = ($empleado ->getCURP());
    $nss = ($empleado ->getNSS());
    $ine = ($empleado ->getINE());
    $rol = ($empleado ->getTipoEmpleado());
    $clave = ($empleado ->getPassword());
    $sucursal = ($empleado ->getSucursal());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <h1>Modificar Empleados</h1>
    <div class="conainer bg-dark">
        <form action="" method="post">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 justify-content-center">
                    <div class="card" style="width: 20rem;">
                        <img src="./img/DatosPrincipales.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">Id</label>
                                <input type="text" name="id" id="id" class="form-control" placeholder="id" aria-describedby="helpId" value="<?php echo $id; ?>">
                            </div> 
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="date" name="fecha" id="fecha" class="form-control" placeholder="fecha" aria-describedby="helpId" value="<?php $fechaRegistro=date("Y-m-d ");  echo $fechaRegistro; ?>">
                            </div>                    
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId" value="<?php echo $nombre; ?>">
                            </div>
                            <div class="form-group">
                                <label for="apellidoPaterno">Apellido Paterno</label>
                                <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" placeholder="Apellido Paterno" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"  value="<?php echo $apellidoPaterno; ?>">
                            </div>
                            <div class="form-group">
                                <label for="apellidoMaterno">Apellido Materno</label>
                                <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control" placeholder="Apellido Materno" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"  value="<?php echo  $apellidoMaterno; ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" aria-describedby="helpId"  value="<?php echo $telefono; ?>">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 justify-content-center">
                    <div class="card" style="width: 20rem;">
                        <img src="./img/localizacion.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="direccion" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"  value="<?php echo $direccion; ?>">
                        </div>
                        <div class="form-group">
                            <label for="colonia">Colonia</label>
                            <input type="text" name="colonia" id="colonia" class="form-control" placeholder="colonia" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"  value="<?php echo  $colonia; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="ciudad" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"  value="<?php echo $ciudad; ?>">
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" id="estado" class="form-control" placeholder="estado" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"  value="<?php echo $estado; ?>">
                        </div>
                        <div class="form-group">
                            <label for="cp">Cp</label>
                            <input type="number" name="cp" id="cp" class="form-control" placeholder="cp" aria-describedby="helpId"  value="<?php echo $cp; ?>">
                        </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 justify-content-center">
                    <div class="card" style="width: 20rem;">
                        <img src="./img/datosGenerales.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo" aria-describedby="helpId"   value="<?php echo $correo; ?>">
                        </div>

                        <div class="form-group">
                            <label for="rfc">RFC</label>
                            <input type="text" name="rfc" id="rfc" class="form-control" placeholder="rfc" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"   value="<?php echo $rfc; ?>">
                        </div>
                        <div class="form-group">
                            <label for="curp">CURP</label>
                            <input type="text" name="curp" id="curp" class="form-control" placeholder="curp" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"  value="<?php echo $curp; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nss">NSS</label>
                            <input type="text" name="nss" id="nss" class="form-control" placeholder="nss" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"  value="<?php echo $nss; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ine">INE</label>
                            <input type="text" name="ine" id="ine" class="form-control" placeholder="ine" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId"  value="<?php echo $ine; ?>">
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/datosInetrnos.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-group">
                            <label for="rol">Rol</label>
                            <select class="form-control" name="rol" id="rol">
                                <option value="1">Administrador</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Usuario">Usuario</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="clave">Clave</label>
                            <input type="password" name="clave" id="clave" class="form-control" placeholder="Clave" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="sucursal">Sucursal</label>
                            <select class="form-control" name="sucursal" id="sucursal">
                                <option value="GTO">GTO</option>
                                <option value=".">.</option>
                            </select>
                        </div>
                        <button  type="submit" class="btn btn-primary" name="insertar">Guardar</button>                               
                        </div>
                    </div>                
                </div>
            </div>
            <br>            
        </form>
    </div>  
