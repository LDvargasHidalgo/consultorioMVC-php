<?php

    require 'config/conexion.php';
    require_once ('Controllers/Home.php'); 
    $prueba = new Home;

    $correcto = false;

    // print_r($_POST);


    if(isset($_POST['id'])){


    $sql = 'UPDATE productos SET nombre = ? , precio = ? WHERE id= ? ';
    $respuesta = $db->mysql->prepare($sql);

    $respuesta->execute([
        
        $nombre,
        $precio,
        $id,
    ]);

    if($respuesta){
        $correcto = true;
    }

    }else{

    print_r($_POST);
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tema = $_POST['tema'];
    $fecha_cita = $_POST['fecha'];
    $hora_cita = $_POST['hora'];

    $data1 = $prueba->crearCita($id, $nombre, $tema, $fecha_cita, $hora_cita);

    if($respuesta){
        $correcto = true;
    }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="py-3"> 
    <main class="container">
        <div class="row">
            <div class="col">
                <?php if($correcto){ ?>
                    <h3>Registro guardado</h3>
                    <?php } else {?>
                    <h3>Error al guardar</h3>
                    <?php  } ?>
                    <a class="btn btn-secondary" href="index.php" >Atrás</a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>