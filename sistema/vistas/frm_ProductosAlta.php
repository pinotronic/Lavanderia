<?php
$procesado = false;

if(isset($_POST["descripcion"])){
    $descripcion = $_POST["descripcion"];
}
if(isset($_POST["factor"])){
    $factor = $_POST["factor"];
}
if(isset($_POST["precio"])){
    $precio = $_POST["precio"];
}
if(isset($_POST["planchado"])){
    $planchado = $_POST["planchado"];
}
if(isset($_POST["puntos"])){
    $puntos = $_POST["puntos"];
}
if(isset($_POST["piezas"])){
    $piezas = $_POST["piezas"];
}
if(isset($_POST["descuento"])){
    $descuento = $_POST["descuento"];
}

if(isset($_POST["insertar"])){
    $producto = new Productos("", $descripcion, $factor, $precio, $planchado, $puntos, $piezas, $descuento);
    $producto -> insertar();
    $procesado = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<h1>Alta Productos</h1>
<div class="conainer bg-dark">
    <form action="" method="post">
        <br>
        <div class="row justify-content-center">
            <div class="col-12 col-md-3 justify-content-center">
                <div class="card" style="width: 20rem;">
                <img src="./img/altaProducto.jpg" class="card-img-top" alt="...">
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion" aria-describedby="helpId">
                    </div>  
                    <div class="form-group">
                        <label for="factor">Factor</label>
                        <input type="number" name="factor" id="factor" class="form-control" placeholder="factor" aria-describedby="helpId">
                    </div> 
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" placeholder="precio" aria-describedby="helpId">
                    </div> 
                    <div class="form-group">
                        <label for="planchado">$ Planchado</label>
                        <input type="number" name="planchado" id="planchado" class="form-control" placeholder="precio Planchado" aria-describedby="helpId">
                    </div> 
                    <div class="form-group">
                        <label for="puntos">Puntos</label>
                        <input type="number" name="puntos" id="puntos" class="form-control" placeholder="puntos" aria-describedby="helpId">
                    </div> 
                    <div class="form-group">
                        <label for="piezas">Piezas</label>
                        <input type="number" name="piezas" id="piezas" class="form-control" placeholder="piezas" aria-describedby="helpId">
                    </div> 
                    <div class="form-group">
                        <label for="descuento">Descuento</label>
                        <input type="number" name="descuento" id="descuento" class="form-control" placeholder="descuento" aria-describedby="helpId">
                    </div> 
                    <button type="submit" class="btn btn-primary" name="insertar">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>