<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Club Catarroja</title>
    <link rel="stylesheet" href="./css/estilos.css">
  </head>
  <body>
    <!--MENU-->
    <div class="menu">
      <nav>
        <ul>
          <li><a href="index.html"><img src="./img/logo.png" alt=""></a></li>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="nuevacarrera.php">Nueva Carrera</a></li>
          <li><a href="listarcarreras.php">Listar Carreras</a></li>
            <li><a href="registro.php">Registrate</a></li>
        </ul>
      </nav>
    </div>
    <!--MENU-->
    <!--MENU-->
    <div class="contenido" action="nuevacarrera.php" method="post">
        Carrera: <br><input type="text" name="carrera"><br><br>
        Fecha: <br><input type="text" name="fecha"><br><br>
        Tiempo: <br><input type="text" name="tiempo"><br><br>
        <input type="submit" value="Insertar">
      </form>

      <?php
      include "carrera.php";
      $insertar=new carrera();
      //INSERTAR UNA CARRERA
      $insert->insertarCarrera($_POST['carrera'],$_POST['fecha'],$_POST['idusuario'],$_POST['tiempo']);
      ?>

    </div>
  </body>
</html>
