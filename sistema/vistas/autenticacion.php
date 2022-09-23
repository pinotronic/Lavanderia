<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>
<?php // Autentifica 
//include_once("./logica/paciente.php");
//include_once("./logica/medico.php");
$idEmpleado="";
$errorAutenticacion = false;
$errorHabilitacion = false;

if(isset($_POST["autenticar"])){

    $tipoUsuario = $_POST["tipoUsuario"]; 
    if($tipoUsuario =="empleado"){
        $idEmpleado = $_POST["idEmpleado"];
        $clave = $_POST["clave"];
        $login = new Empleado();
        $resultado = $login -> autentificacionpaciente($idEmpleado, $clave);
        

        if($resultado){
                $_SESSION["idEmpleado"] = $login -> getID();
                $_SESSION["nombre"] = $login -> getNombre();
                $_SESSION["apellidoPaterno"] = $login -> getApellidoPaterno();
                $_SESSION["apellidoMaterno"] = $login -> getApellidoMaterno();
                $_SESSION["tipoEmpleado"] = $login -> getTipoEmpleado();            
            
                echo "<script>location.href = \"index.php?pid=vistas/frm_bienvenida\"</script>";
        }else{
            $errorAutenticacion = true;            	
            $message = "Las credenciales son incorrectas(2)";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }else{
            $errorAutenticacion = true;
            $message = "Las credenciales son incorrectas(1)";
            echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>

<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">        
        <title> Formulario de Acceso </title>        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="login,formulariode acceso html">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="./css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
    
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="form" method="post" action="">
                        <label for="idEmpleado">Usuario</label>
                        <input id="idEmpleado" type="text" name="idEmpleado" placeholder="idEmpleado" required>
                        
                        <label for="password">Contraseña</label>
                        <input id="clave" type="password" placeholder="Contraseña" name="clave" required>
                        <p>
                            Empleado
                            <input type="radio" name="tipoUsuario" value="empleado" checked>
                            Administrador
                            <input type="radio" name="tipoUsuario" value="administrador"> 
                        </p>
                        <button type="submit" title="Ingresar" name="autenticar">Login</button>
                        
                    </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido a Tintoreria T-MAX-GTO
                    </div>
                    <hr>
                    <div class="pie-form">
                        <h4>Ingresa</h4>
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="registrarUsuario.html">¿No tienes Cuenta? Registrate</a>
                        <hr>
                        <a href="./Index.html">« Volver</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>