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
      <form action="index.php" method="post">
        Usuario:<input type="text" name="usuario" value=""><br><br>
        Contraseña:<input type="password" name="pass" value=""><br><br>
        <input type="submit" name="login" value="login">
      </form>
        <a href="registro.php">Registrarse</a>
        <?php
        if (isset($_POST['usuario']) && isset($_POST['pass'])) {
          include 'usuario.php';
          include 'seguridad.php';
          $usuario = new usuario();
          $sesion = new seguridad();
          $registrado=$usuario->LoginUsuario($_POST['usuario']);
          if ($registrado!=null) {
              //SI PONEMOS LA MISMA PASS NO PODEMOS ENTRAR
              if ($registrado['pass']==sha1($_POST['pass'])) {
                echo "Usuario logueado";
                $sesion->addUsuario($registrado['usuario']);
                header('Location: miperfil.php');
              }else {
                echo "Usuario o contraseña incorrectas";
              }
            }else {
              echo "Usuario no encontrado";
            }
          }
       ?>
    </div>
  </body>
</html>
