<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Consultorio </title>
</head>
<body>
   <?php
      include "modulos/menu.php";

      echo '<div id="right-panel" class="right-panel">';


      include "modulos/cabezote.php";



      if (isset($_GET["ruta"])) {
         if (
            $_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "citas"
         ) {
            include "modulos/" . $_GET["ruta"] . ".php";
         }
      }

      include "modulos/footer.php";

      echo '<div/>';


   ?>
</body>
</html>