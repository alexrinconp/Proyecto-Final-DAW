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
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Matem??ticas'>";
                 echo "</form>";
          ?>
       </li>
       <li><?php
                 echo "<form method='post' action='estadistica.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Estad??stica'>";
                 echo "</form>";
          ?>
       </li>
       <li><?php
                 echo "<form method='post' action='informatica.php'>";
                 echo "<input type = 'int' style='display:none;' name = 'id_usuario' id = 'id_usuario' value=\"".$id_usuario."\"/>";
                 echo "<input type = 'text' style='display:none;' name = 'correo' id = 'correo' value=\"".$correo."\"/>";
                 echo "<input type='submit' name='producto-submit' id='producto-submit' class = 'btn btn-lg btn-success' value='Inform??tica'>";
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
                <li><a href="inicio_sesion.php">Iniciar sesi??n</a></li>
                <li><a href="registro.php">Registrarse</a></li>
                <li><a href="landing_page.php">Cerrar sesi??n</a> </li>
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

    <div class="container-fluid">
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
	    
		$result = mysqli_query($link, "SELECT nombre_p, correo, precio, cupo FROM usuarios as u, productos as p, historial as h WHERE h.id_producto_compra=p.id_producto AND u.id_usuario = '$id_usuario' AND h.id_usuario_compra = u.id_usuario;");
        
		echo "<div class='container-fluid'>
        <table class='table table-bordered'>
		<tr>
		<th>Tutoria</th>
		<th>Usuario</th>
		<th>Precio</th>
		<th>Cupo</th>
		</tr>";
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['nombre_p'] . "</td>";
            echo "<td>" . $row['correo'] . "</td>";
            echo "<td>" . $row['precio'] . "</td>";
            echo "<td>" . $row['cupo'] . "</td>";
            echo "</tr>";
        }	
		echo "</table></div>";
	
		mysqli_close($link);
	?>
    </div><br>

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
                <span style="text-align: center"><h3>Alejandro Rinc??n Pierre</h3></span>
                <span style="text-align: center"><h6>Proyecto Final Desarrollo de Aplicaciones Web</h6></span>
            </div>
            <div class="col-xs-6 col-sm-4">
                <span style="text-align: center"><h3>Nosotros</h3></span>
                <h6>Un estudiante ten??a un sue??o, contar con una plataforma donde pudiera fortalecer sus conocimientos sin gastar mucho dinero</h6>
            </div>
            <div class="col-xs-6 col-sm-4">
            <span style="text-align: center"><h3>Nuestras redes sociales</h3></span>
                <h6>Pr??ximamente<h6>
            </div>
        </div> 
    </div> 
</body>
</html>