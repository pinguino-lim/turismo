<?php
include("php/api.php");
    $city_name = $_GET['city_name'];
    $id = $_GET['id'];
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( "localhost", "root", "" ) or die ("No se ha podido conectar al servidor de Base de datos");	
	$db = mysqli_select_db( $conexion, "turismo" ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );	
	$consulta = 'SELECT * FROM traveldb WHERE id="'.$id.'"';
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $columna = mysqli_fetch_array( $resultado);
    $country = $columna['country'];
    $country = utf8_encode($columna['country']);
    $url = 'http://papi.minube.com/cities?lang=ES&filter='.$city_name;
    $cities = API::GET($url);
    $ciudades = json_decode($cities,TRUE);
    $country_id = 0;     
    $city_id = 0;
    for($i=1;$i<count($ciudades);$i++){
        foreach($ciudades[$i] as $clave => $valor){
            if($ciudades[$i]['city_name']==$city_name && $ciudades[$i]['zone_name']==$city_name){
                $country_id = $ciudades[$i]['country_id'];
                $city_id = $ciudades[$i]['city_id'];
            }            
        }        
    }

    $url_pois = "http://papi.minube.com/pois?lang=ES&city_id=".$city_id;
    $pois = API::GET($url_pois);
    $points = json_decode($pois,TRUE);
    // xecho $pois;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="Elwin" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

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
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Tu destino mas sostenible</h1>
            <p class="blog-post-meta"><a href="#">Atrevete a cambiar el mundo</a></p>
        </div>
        <div class="row">
<?php	
    echo '<div class="col-sm-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">'.$columna['name'].'</h2>
                <p class="blog-post-meta">Hosted by <a href="#">'.$columna['owner'].'</a></p>
                <p>'.$columna['activity'].'</p>
                <p>'.$columna['generaldescription'].'</p>
                <ul>';
                    if($columna['fishing'] == '1') {
                        echo '<li><img src="img/fishing.ico" style="width:20px; height:20px;"> Actividades de Pesca</li>';
                    }
                    if($columna['pets'] == '1') {
                        echo '<li><img src="img/pet.ico" style="width:20px; height:20px;"> Mascotas</li>';
                    }
                    if($columna['cookingws'] == '1') {
                        echo '<li><img src="img/cooking.ico" style="width:20px; height:20px;"> Se permite cocinar</li>';
                    }
                    if($columna['equestrianroute'] == '1') {
                        echo '<li><img src="img/equestrian.ico" style="width:20px; height:20px;"> Recorrido a caballo</li>';        
                    }                                                
                    if($columna['fishing'] == '1') {
                        echo '<li><img src="img/fishing.ico" style="width:20px; height:20px;"> Actividades de pesca</li>';
                    }
                    if($columna['seaactivities'] == '1') {
                        echo '<li><img src="img/seaactivities.ico" style="width:20px; height:20px;"> Actividades en el Mar</li>';
                    }
                    if($columna['rooms'] !== '0') {
                        echo '<li><img src="img/bed.ico" style="width:20px; height:20px;"> '.$columna['rooms'].' Camas disponibles</li>';
                    }
                echo '</ul>
                    <blockquote>
                    <p>Tradición <strong>'.$columna['heritagedescription'].'</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p><strong>Que Haremos </strong>Al principio le daré algunos conocimientos básicos sobre la cámara y cuestiones técnicas.
                    Te mostraré pequeñas calles y plazas, mientras caminamos dispararemos y te daré consejos para obtener mejores fotos..</p>
                    <p><strong>Donde estaremos </strong>Caminaremos por el centro histórico descubriendo pequeñas calles y plazas. Caminar es la mejor manera de descubrir lugares secretos y no es muy común verlo. Tengo una selección de cuadrados con fuentes para refrescar la vista.</p>
                    <p><strong>Ubicación </strong> '.$columna['location'].'</p>
                    <p><a class="btn btn-lg  btn-success" href="#" role="button">Reservar »</a></p>
            </div><!-- /.blog-post -->';        
        mysqli_close( $conexion );
?>
        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <img src="img/minube.png" style=" width: 30%;"> 
<?php
        for($i=1;$i<5;$i++){
            echo '<div class="sidebar-module sidebar-module-inset">';
            echo '<h4>'.$points[$i]["name"].'</h4>';
            echo '<img src='.$points[$i]['picture_url'].' class="img-responsive" alt="Responsive image">';
            echo '<a href="https://www.google.com/maps/?q='.$points[$i]['latitude'].','.$points[$i]['longitude'].'" target="_blank">ver en Maps.</a>';
            echo '</div>';
        }
?>                 
        </div><!-- /.row -->';

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
