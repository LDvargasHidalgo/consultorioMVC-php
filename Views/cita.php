<!DOCTYPE html>
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
   <nav class="navbar navbar-dark bg-dark text-warning justify-content-center  ">     
      <h1 class="py-4 ">¿Cual es tu consulta?</h1>
   </nav>
   <section class="container p-4  container-form">
  <form action="" class="contain">
     <h2 class="text-center pb-4">NUEVA CITA</h2>
     <div class="form-group">
        <label for="">Nombre:</label>
        <input type="text" placeholder="Escribe tu nombre" class="form-control mb-4" required >
     </div>
     <div class="form-group">
      <label  for="">Tema:</label>
      <input type="text" placeholder="Cual es tu consulta" class="form-control mb-4" required >
   </div>
   <div class="form-group">
      <label for="">Fecha:</label>
      <input type="date" class="form-control mb-4" required>
   </div>
   <div class="form-group">
      <label for="">Hora:</label>
      <input type="time" class="form-control" required>
   </div>
   <div class="text-end">
      <button class="btn btn-warning mt-4  ">Ver Citas</button>
      <button class="btn btn-dark mt-4  ml-4 ">Guardar</button>
    
   </div>
  </form>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>