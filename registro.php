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
          <li><a href="#">Listar Carreras</a></li>
        </ul>
      </nav>
    </div>
    <!--MENU-->
    <!--MENU-->
    <div class="contenido" action="registro.php" method="post">
      Nombre:<input type="text" name="nombre" value=""><br><br>
      Apellidos:<input type="text" name="apellidos" value=""><br><br>
      Usuario:<input type="text" name="usuario" value=""><br><br>
      Email:<input type="text" name="email" value=""><br><br>
      Contraseña:<input type="password" name="pass" value=""><br><br>
      Vuelve a escribir la contraseña:<input type="password" name="pass2" value=""><br><br>
      <input type="submit" name="Registrarse" value="Registrarse">
      
      <?php
      $comprobacion=0;
      if (isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['usuario']) && isset($_POST['pass']) && isset($_POST['pass2'])) {
        include 'usuario.php';
        $usuario = new usuario();
        $tabla=$usuario->Comprobaremail($_POST['email']);
        if ($tabla==null) {
          echo "El correo ya esta registrado.";
        }else {
          if ($_POST['pass']==$_POST['pass2']) {
            $resultado=$usuario->Insertarusuario($_POST["nombre"],  $_POST["apellidos"], $_POST["usuario"], $_POST["email"], $_POST["pass"]);
            if ($resultado==null) {
              echo "Error";
            }else {
              echo "Nombre: " .$resultado['nombre'] ."<br><br>";
              echo "Apellidos: " .$resultado['apellidos'] ."<br><br>";
              echo "usuario: " .$resultado['email'] ."<br><br>";
              }
            }else {
              echo "<a href='registro.php'>Algo falla, revisa tu contraseña.</a>";
          }
        }
      }
    ?>
    </div>
  </body>
</html>
