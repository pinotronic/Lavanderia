<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>
<?php // Menu

include_once("./logica/empleados.php");

$IdUsuario = $_SESSION['idEmpleado'];
$nombre = $_SESSION['nombre'];
$apellidoPaterno = $_SESSION['apellidoPaterno'];
$tipoUsuario = $_SESSION["tipoEmpleado"];  
?>
<!doctype html>
<html lang="en">
    <head><meta charset="windows-1252">        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<body>

    <div class="container-fluid"> 
        <div class="bg-dark">  
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <!--  --> 
                    <a href="index.php?pid=vistas/frm_bienvenida" class="navbar-brand" ><span class="fas fa-home" aria-hidden="true"></span></a>
                    <!--  --> 
                    <button type="button" 
                            class="navbar-toggler" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#MenuNavegacion">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div id="MenuNavegacion" class="collapse navbar-collapse" >
                    <ul class="navbar-nav mr-auto" class="col-sm-12">                    
                        <li class="nav-item dropdown ">
                            <?php
                                $tipoUsuario = $_SESSION["tipoEmpleado"];

                                if($tipoUsuario == "Empleado"){                                
                                    echo '<li><a class="dropdown-item" href="index.php?pid=vistas/frm_Notas"><i class="fas fa-user-shield">📄 Notas</i></a></li>';
                                    echo '<li><a class="dropdown-item" href="index.php?pid=vistas/frm_ClientesLista"><i class="fas fa-user-shield"> Alta Clientes</i></a></li>';
                                }
                                if($tipoUsuario == "Administracion"){                                
                                    echo '<li><a class="dropdown-item" href="index.php?pid=vistas/frm_EmpleadosLista"><i class="fas fa-user-shield">📄 Empleados</i></a></li>';
                                    echo '<li><a class="dropdown-item" href="index.php?pid=vistas/frm_ProductosLista"><i class="fas fa-user-shield">📄 Productos</i></a></li>';
                                    echo '<li><a class="dropdown-item" href="index.php?pid=vistas/frm_Reportes"><i class="fas fa-user-shield"> Reportes</i></a></li>';
                                }
                            ?>                   
                            <ul class="dropdown-menu">
                            <!--    --> 
                            </ul>
                        </li>                    
                        <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown">Usuario: <?php echo $tipoUsuario  .",  " . $nombre . " " . $apellidoPaterno ?><span class="caret"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php?salida=1">Salir</a>
                                </li>
                        </ul>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<!--  --> 