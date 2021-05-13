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
    </div class="container">
        <h2>Bienvenido<h2>
    </div>
    <?php
		$user = 'root';
		$password = 'root';
		$db = 'proyecto final daw';
		$host = 'localhost';
		$port = 3306;
		
		$link = mysqli_init();
		$success = mysqli_real_connect(
		   $link, 
		   $host, 
		   $user, 
		   $password, 
		   $db,
		   $port
		);

		// Check connection
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		// escape variables for security
        $nombre_u = mysqli_real_escape_string($link, $_POST['nombre']);
        $correo = mysqli_real_escape_string($link, $_POST['correo']);
        $pass = mysqli_real_escape_string($link, $_POST['pass']);
        $birth = mysqli_real_escape_string($link, $_POST['birth']);
        $ccard = mysqli_real_escape_string($link, $_POST['ccard']);
        $cp = mysqli_real_escape_string($link, $_POST['cp']);
        $dir = mysqli_real_escape_string($link, $_POST['dir']);
        $tel = mysqli_real_escape_string($link, $_POST['tel']);

        $sql="INSERT INTO usuarios (nombre_u, correo, pass, birth, ccard, cp, direccion, telefono) VALUES ('$nombre_u', '$correo', '$pass',
		'$birth','$ccard','$cp', '$dir', '$tel');";
	
		if (!mysqli_query($link,$sql)) {
		  die('Error: ' . mysqli_error($link));
		}
	
		mysqli_close($link);
	?>
    </div><br>
    <div class="container-fluid" style="text-align: center;">
                <?php
                  echo "<form action='landing_page.php' method='post'>";
                  echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                  echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                  echo "<input type='submit' name='producto-submit' id='producto-submit' tabindex='4' class='form-control btn btn-login' value='Volver a Inicio'>";
                  echo "</form>";
                ?>
    </div><br>
    <div class="container-fluid fixed-bottom" style="background-color: black; color: white; text-align: center;">
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