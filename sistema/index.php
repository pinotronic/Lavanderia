<?php
session_start();
require("logica/empleados.php");
require("logica/productos.php");
require("logica/cliente.php");
if(isset($_GET["salida"])){
    $_SESSION["id"]="";
}
?>
<!DOCTYPE html>
<head>
    <title>Index.php</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="js/app.js">
    
    <script charset="utf-8">
        $(function () {
            $("[data-toggle=\"tooltip\"]").tooltip();
        });
        var listaProductos = [];
    </script>
</head>
<body>
    <?php
                if(empty($_GET["pid"])){
                    include("vistas/autenticacion.php");
                }else{                    
                    if($_SESSION["idEmpleado"]==""){
                    header("Location: index.php");
                    die();
                    }else{
                    include("vistas/menu.php");
                    include($_GET["pid"] . ".php");
                    }
                }
        ?>
</body>
</html>




