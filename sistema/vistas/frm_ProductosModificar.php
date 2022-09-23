
<?php
$id="";
$descripcion="";
$factor="";
$precio="";
$precioPlanchado="";
$puntos="";
$piezas="";
$descuento="";                              

if(isset($_GET["id"])){
    $id=$_GET["id"];
    $producto =new Productos();
    $producto -> buscarId($id);
    $id = ($producto ->getID());
    $descripcion = ($producto ->getDescripcion());
    $factor = ($producto ->getFactor());
    $precio = ($producto ->getPrecio());
    $Planchado = ($producto ->getPlanchado());
    $puntos = ($producto ->getPuntos());
    $piezas = ($producto ->getPiezas());
    $descuento = ($producto ->getDescuento());
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
<h1>Modificar Productos</h1>
<div class="conainer bg-dark">
    <form action="" method="post">
        <br>
        <div class="row justify-content-center">
            <div class="col-12 col-md-3 justify-content-center">
                <div class="card" style="width: 20rem;">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" name="id" id="id" class="form-control" placeholder="id" aria-describedby="helpId"  value="<?php echo $id; ?>">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>  
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion" aria-describedby="helpId" value="<?php echo $descripcion; ?>">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>  
                    <div class="form-group">
                        <label for="factor">Factor</label>
                        <input type="number" name="factor" id="factor" class="form-control" placeholder="factor" aria-describedby="helpId" value="<?php echo $factor; ?>">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div> 
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" placeholder="precio" aria-describedby="helpId" value="<?php echo $precio; ?>">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div> 
                    <div class="form-group">
                        <label for="precioPlanchado">$ Planchado</label>
                        <input type="number" name="precioPlanchado" id="precioPlanchado" class="form-control" placeholder="precioPlanchado" aria-describedby="helpId" value="<?php echo $planchado; ?>">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div> 
                    <div class="form-group">
                        <label for="puntos">Puntos</label>
                        <input type="number" name="puntos" id="puntos" class="form-control" placeholder="puntos" aria-describedby="helpId" value="<?php echo $puntos; ?>">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div> 
                    <div class="form-group">
                        <label for="piezas">Piezas</label>
                        <input type="number" name="piezas" id="piezas" class="form-control" placeholder="piezas" aria-describedby="helpId" value="<?php echo $piezas; ?>">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div> 
                    <div class="form-group">
                        <label for="descuento">Descuento</label>
                        <input type="number" name="descuento" id="descuento" class="form-control" placeholder="descuento" aria-describedby="helpId" value="<?php echo $descuento; ?>">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div> 
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>