<?php

require_once('Controllers/Home.php');
$prueba = new Home;


$data = $prueba->verCitas();

?>

<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="./assets//style.css">
   <title>Document</title>
</head>

<body>


   <div class="row">

      <div class="col">
         <button class="btn btn-warning mb-4 mt-4">Nueva Cita</button>
         <table class="table  table-hover table-bordered border-secondary align-middle caption-top table-light">
            <caption>Citas de Desarrolladores</caption>
            <thead>
               <tr class="table-dark text-center ">
                  <th>Nombre </th>
                  <th>Tema a Consultar</th>
                  <th>Fecha </th>
                  <th>Hora</th>
                  <th>Fecha creación cita</th>
                  <th>Eliminar</th>
                  <th>Editar</th>
               </tr>
            </thead>
            <tbody>

               <?php foreach ($data as $cita) { ?>
                  <tr class="text-center">

                     <td><?php echo $cita['nombre'] ?></td>
                     <td><?php echo $cita['tema'] ?></td>
                     <td><?php echo $cita['fecha_cita'] ?></td>
                     <td><?php echo $cita['hora_cita'] ?></td>
                     <td><?php echo $cita['fecha_creacion'] ?></td>

                  </tr>
               <?php  } ?>
            </tbody>
         </table>
      </div>
   </div>
   </div>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>