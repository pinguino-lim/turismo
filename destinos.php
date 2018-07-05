<?php
$city_name = $_GET['city_name'];
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <title>Destinos Sostenibles en el Mundo</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js.download"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <a href="index.html"><img src="img/logo_.png" style=" width: 30%;"></a>
            <ul class="nav navbar-nav">                      
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">¿Quienes somos?</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">
      <div>
        <div class="card mb-4 box-shadow">
            <div class="card-body">
                <dl class="dl-horizontal">
                <?php
                  $usuario = "root";
                  $password = "";
                  $servidor = "localhost";
                  $basededatos = "turismo";
                  
                  // creación de la conexión a la base de datos con mysql_connect()
                  $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
                  
                  // Selección del a base de datos a utilizar
                  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
                  // establecer y realizar consulta. guardamos en variable.
                  $consulta = 'SELECT * FROM traveldb WHERE province LIKE "'.$city_name.'"';
                  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                  
                  // Bucle while que recorre cada registro y muestra cada campo en la tabla.
                  while ($columna = mysqli_fetch_array( $resultado ))
                  {
                    echo '<div class="row marketing">';
                      echo '<div class="col-lg-6">';
                        echo '<h1 class="card-title pricing-card-title">'.$columna['price'].'€<small class="text-muted">/ '.$columna['name'].'</small></h1>';
                        echo "<dt>Ciudad : </dt><dd>".$columna['city']."</dd>";
                        echo '<dt>Personas Max.: </dt><dd>'.$columna['maxPersons'].'</dd>';
                        echo "<dt>Descripcion : </dt><dd>".$columna['generaldescription']."</dd>";
                        if($columna['pets'] == '1') {
                          echo '<dt>Mascotas : </dt><dd><img src="img/pet.ico" class="img-responsive" style="width:20px; height:20px;"></dd>';
                        }
                        if($columna['cookingws'] == '1') {
                          echo '<dt>Se puede cocinar : </dt><dd><img src="img/cooking.ico" class="img-responsive" style="width:20px; height:20px;"></dd>';
                        }
                        if($columna['equestrianroute'] == '1') {
                          echo '<dt>Recorrido a Caballo : </dt><dd><img src="img/equestrian.ico" class="img-responsive" style="width:20px; height:20px;"></dd>';
                        }                                                
                        if($columna['fishing'] == '1') {
                          echo '<dt>Actividades de Pesca : </dt><dd><img src="img/fishing.ico" class="img-responsive" style="width:20px; height:20px;"></dd>';
                        }
                        if($columna['seaactivities'] == '1') {
                          echo '<dt>Actividades en el Mar : </dt><dd><img src="img/seaactivities.ico" class="img-responsive" style="width:20px; height:20px;"></dd>';
                        }
                      echo '</div><div class="col-lg-6">';
                        echo '<img src='.$columna['image'].' class="img-responsive" alt="Responsive image">';
                      echo '</div>';
                      echo '<p><a class="btn btn-lg  btn-success" href="destino.php?city_name='.$city_name.'&id='.$columna['id'].'" role="button">Vivir Experiencia »</a></p>';
                    echo '</div>';
                  }
                  
                  echo "</table>";
                ?>
                </dl>                                
            </div>
        </div>      
      </div>                
      <footer class="footer">
        <p>© 2018 Experience, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js.download"></script>
  

</body></html>
<?php
mysqli_close( $conexion );
?>