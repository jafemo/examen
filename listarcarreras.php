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
    <div class="contenido">
      <?php
        include 'carrera.php';
        $equipo=new carrera();
        ?>
        <table border="1px">
          <thead>
           <tr>
             <th>Carrera</th>
             <th>Fecha</th>
             <th>Tiempo</th>
           </tr>
          </thead>
        <?php
        $tablalista=$equipo->ListaCarreras();
        foreach ($tablalista as $fila) {
            echo "<tr><td>" .$fila["carrera"] ."</td><td>" .$fila["fecha"] ."</td><td>" .$fila["idusuario"] ."</td><td>" .$fila["tiempo"] . "</a></td></tr>";
        }
       ?>
    </div>
  </body>
</html>
