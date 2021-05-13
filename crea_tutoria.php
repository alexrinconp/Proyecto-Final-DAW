<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <title>Tutorias SOS</title>
</head>
<body>
<?php
        // define variables and set to empty values
        $correo = "";
        $id_usuario;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $correo = test_input($_POST["correo"]);
          $id_usuario = test_input($_POST["id_usuario"]);
        }
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
    ?>
    <nav class="navbar navbar-inverse">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">Tutorias SOS</a>
       </div>
       <ul class="nav navbar-nav">
       <li><?php
                 echo "<form method='post' action='landing_page.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Inicio'>";
                 echo "</form>";
          ?>
       </li>
       <li><?php
                 echo "<form method='post' action='matematicas.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Matemáticas'>";
                 echo "</form>";
          ?>
       </li>
       <li><?php
                 echo "<form method='post' action='estadistica.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Estadística'>";
                 echo "</form>";
          ?>
       </li>
       <li><?php
                 echo "<form method='post' action='informatica.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Informática'>";
                 echo "</form>";
          ?>
       </li>
       <li><?php
                 echo "<form method='post' action='finanzas.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Finanzas'>";
                 echo "</form>";
          ?>
       </li>
       <li><?php
                 echo "<form method='post' action='ingles.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Ingles'>";
                 echo "</form>";
          ?>
       </li>
       <li><?php
                 echo "<form method='post' action='office.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Office'>";
                 echo "</form>";
          ?>
       </li>
       </ul>
        <ul class = "nav navbar-nav navbar-right">
                <li><a href="#"><?php echo $correo; ?></a></li> 
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                <span class="glyphicon glyphicon-user"></span>
                <span class="caret"></span>
                <ul class="dropdown-menu" role="menu">
                <li><a href="inicio_sesion.php">Iniciar sesión</a></li>
                <li><a href="registro.php">Registrarse</a></li>
                <li><a href="landing_page.php">Cerrar sesión</a> </li>
                </ul>
                <li><?php
                 echo "<form method='post' action='carrito.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Carrito'>";
                 echo "<i class='glyphicon glyphicon-shopping-cart'></i>";
                 echo "</form>";
                ?>
       </ul>
    </div>
    </nav>
    <div class="container">
        <h1>Inserta una Tutoría:</h1>
        <form action="nueva_tutoria.php" method="post">
        <div class="form-group">
            Nombre de la Tutoría:  <span>*</span><input type="text" class="form-control" name="curso" id="curso" value="" required><br>
            Descripción de la Tutoría: <span>*</span><input type="text" class="form-control" name="desc" id="desc" value="" required><br>
            Foto de la Tutoría (liga): <span >*</span><input type="text" class="form-control" name="foto" id="foto" value ="" required><br>
            Precio: <span >*</span><input type="number" class="form-control" name="precio" id="precio" min = 0 value="" required><br>
            Cupo: <span >*</span><input type="number" class="form-control" name="cupo" id="cupo" min = 0 value="" required><br>
            Instructor: <span>*</span><input type="text" class="form-control" name="tutor" id="tutor" value="" required><br>
            Universidad: <span>*</span><input type="text" class="form-control" name="uni" id="uni" value="" required><br>
            Horario: <span >*</span><input type="text" class="form-control" name="hor" id="hor" value=""required><br>
            Materia: <span >*</span><br>
            Matematicas: <input type="radio" name="mat" id="mate" <?php if (isset($materia) && $materia=="Mate") echo "checked";?>value="Mate" checked="true"><br>
            Estadística: <input type="radio" name="mat" id="est" <?php if (isset($materia) && $materia=="Est") echo "checked";?>value="Est" checked="true"><br>
            Informática: <input type="radio" name="mat" id="inf" <?php if (isset($materia) && $materia=="Inf") echo "checked";?>value="Inf" checked="true"><br>
            Finanzas: <input type="radio" name="mat" id="fin" <?php if (isset($materia) && $materia=="Fin") echo "checked";?>value="Fin" checked="true"><br>
            Inglés: <input type="radio" name="mat" id="ing" <?php if (isset($materia) && $materia=="Ing") echo "checked";?>value="Ing" checked="true"><br>
            Office: <input type="radio" name="mat" id="off" <?php if (isset($materia) && $materia=="Off") echo "checked";?>value="Off" checked="true"><br>
            <input type = "int" style="display:none;" name = "id_usuario" id = "id_usuario" value=<?php echo $id_usuario;?>>
            <input type = "text" style="display:none;" name = "correo" id = "correo" value=<?php echo $correo; ?>>
            <br><span></span><br><input type="submit" class="btn btn-default" value="Registrar">
        </div>
        </form>
    </div>
    <div class="container-fluid" style="text-align: center;">
                <?php
                  echo "<form action='admin.php' method='post'>";
                  echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                  echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                  echo "<input type='submit' name='producto-submit' id='producto-submit' tabindex='4' class='form-control btn btn-login' value='Regresar'>";
                  echo "</form>";
                ?>
    </div><br>
    <div class="container-fluid" style="background-color: black; color: white; text-align: center;">
    <div class="row">
            <div class="col-xs-6 col-sm-4">
                <span style="text-align: center"><h3>Alejandro Rincón Pierre</h3></span>
                <span style="text-align: center"><h6>Proyecto Final Desarrollo de Aplicaciones Web</h6></span>
            </div>
            <div class="col-xs-6 col-sm-4">
                <span style="text-align: center"><h3>Nosotros</h3></span>
                <h6>Un estudiante tenía un sueño, contar con una plataforma donde pudiera fortalecer sus conocimientos sin gastar mucho dinero</h6>
            </div>
            <div class="col-xs-6 col-sm-4">
            <span style="text-align: center"><h3>Nuestras redes sociales</h3></span>
                <h6>Próximamente<h6>
            </div>
        </div> 
    </div> 
</body>
</html>