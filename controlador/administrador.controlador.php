<?php

class ControladorAdministrador
{

    public function ctrIngresoAdministrador()
    {
        if (isset($_POST["ingemail"])) {
//Utilizamos la clase match para que  solo se ingresen textos
            if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["ingemail"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingpassword"])) {
//nos sirve para encriptar el valor que nos envia por post  password
                $encriptar = crypt($_POST["ingpassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $tabla = "administrador";  //debe ser el mismo de la base de datos
                $item  = "email";
                $valor = $_POST["ingemail"];

                $respuesta = ModeloAdministrador::mdlMostrarAdministrador($tabla, $item, $valor);
// hace la consulta de login
                if ($respuesta["email"] == $_POST["ingemail"] && $respuesta["password"] == $encriptar) {
                  //el estado lo vamos a utilizar para habilitar y desabilitar un
                  //si la respuesta del estado de la base de datos es igual a 1 que nos envia a la sesión si no se cumple que nos envie una alerta  no esta activo
                    if ($respuesta["estado"] == 1) {

                        $_SESSION["validarSesionBackend"] = "ok";
                        $_SESSION["id"]                   = $respuesta["id"];
                        $_SESSION["nombre"]               = $respuesta["nombre"];
                        $_SESSION["email"]                = $respuesta["email"];
                        $_SESSION["password"]             = $respuesta["password"];
                        $_SESSION["perfil"]               = $respuesta["perfil"];

                        echo '<script>

                            window.location = "inicio";

                        </script>';

                    } else {

                        echo '<br>
                        <div class="alert alert-warning">Este usuario aún no está activado</div>';

                    }

                } else {

                    echo '<br>
                    <div class="alert alert-danger">Error al ingresar vuelva a intentarlo</div>';

                }

            }
        }
    }
   }