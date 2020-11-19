<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
  </head>
  <body class="cuerpo">
    <div class="container centrar">
      <div class="container cuerpo text-center">	
        <p><h2><img class="alineadoTextoImagen" src="images/user.png" width="50px"/>Gestión de Usuarios</h2> </p>
      </div>
      <ul>
        <li> <a href="?controller=user&accion=listado"> Listar usuarios</a></li>
        <li> <a href="?controller=user&accion=adduser"> Añadir usuario</a></li>
        <li> <a href="?controller=index&accion=index"> Salir de la aplicación</a></li>
      </ul>
    </div>
  </body>
</html>
