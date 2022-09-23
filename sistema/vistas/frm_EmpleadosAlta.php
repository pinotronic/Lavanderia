<?php
$procesado = false;

if(isset($_POST["fecha"])){
    $fecha= $_POST["fecha"];
}

if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
}

if(isset($_POST["apellidoPaterno"])){
    $apellidoPaterno = $_POST["apellidoPaterno"];
}

if(isset($_POST["apellidoMaterno"])){
    $apellidoMaterno = $_POST["apellidoMaterno"];
}

if(isset($_POST["telefono"])){
    $telefono = $_POST["telefono"];
}

if(isset($_POST["direccion"])){
    $direccion = $_POST["direccion"];
}

if(isset($_POST["colonia"])){
    $colonia = $_POST["colonia"];
}

if(isset($_POST["ciudad"])){
    $ciudad = $_POST["ciudad"];
}

if(isset($_POST["estado"])){
    $estado = $_POST["estado"];
}

if(isset($_POST["cp"])){
    $cp = $_POST["cp"];
}

if(isset($_POST["correo"])){
    $correo = $_POST["correo"];
}

if(isset($_POST["rfc"])){
    $rfc = $_POST["rfc"];
}

if(isset($_POST["curp"])){
    $curp = $_POST["curp"];
}

if(isset($_POST["nss"])){
    $nss = $_POST["nss"];
}

if(isset($_POST["ine"])){
    $ine = $_POST["ine"];
}

if(isset($_POST["rol"])){
    $rol = $_POST["rol"];
}

if(isset($_POST["clave"])){
    $clave = $_POST["clave"];
}

if(isset($_POST["sucursal"])){
    $sucursal = $_POST["sucursal"];
}

if(isset($_POST["insertar"])){
    $persona = new Empleado("", $fecha, $nombre, $apellidoPaterno, $apellidoMaterno, $direccion, $colonia, $ciudad, $estado, $cp, $telefono, $correo,  $rfc, $curp, $nss, $ine, $rol,$clave, $sucursal);
    $persona -> insertar();
    $procesado = true;
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
    <h1>Alta Empleados</h1>
    <div class="conainer bg-dark">
        <form action="" method="post">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 justify-content-center">
                    <div class="card" style="width: 20rem;">
                        <img src="./img/DatosPrincipales.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="date" name="fecha" id="fecha" class="form-control" placeholder="fecha" aria-describedby="helpId" value="<?php echo date('Y-m-d');?>">
                            </div>                    
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="apellidoPaterno">Apellido Paterno</label>
                                <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" placeholder="Apellido Paterno" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="apellidoMaterno">Apellido Materno</label>
                                <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control" placeholder="Apellido Materno" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" aria-describedby="helpId">
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
                            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="direccion" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="colonia">Colonia</label>
                            <input type="text" name="colonia" id="colonia" class="form-control" placeholder="colonia" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="ciudad" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" id="estado" class="form-control" placeholder="estado" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="cp">Cp</label>
                            <input type="number" name="cp" id="cp" class="form-control" placeholder="cp" aria-describedby="helpId">
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
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="rfc">RFC</label>
                            <input type="text" name="rfc" id="rfc" class="form-control" placeholder="rfc" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="curp">CURP</label>
                            <input type="text" name="curp" id="curp" class="form-control" placeholder="curp" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="nss">NSS</label>
                            <input type="text" name="nss" id="nss" class="form-control" placeholder="nss" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="ine">INE</label>
                            <input type="text" name="ine" id="ine" class="form-control" placeholder="ine" onkeyup="this.value = this.value.toUpperCase();" aria-describedby="helpId">
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
                                    <option value="Administrador">Administrador</option>
                                    <option value="Empleado">Empleado</option>
                                </select>
                            </div>
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
