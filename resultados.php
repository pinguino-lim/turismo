<?php
$myfile = fopen("rs/output.txt", "r") or die("Unable to open file!");            
$result = fgets($myfile);
fclose($myfile);
$resultados = json_decode($result,TRUE);
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
      <img src="img/banner1.png" style=" width: 100%;"></br></br>
        <div class="row">
<?php          
        for($i=1;$i<count($resultados["Destination"]);$i++){
            $score = (float)$resultados["Score"][$i];
            $score_total = $score*100;
            echo '<div class="col-xs-6 col-lg-4">                  
                    <div class="panel panel-success">
                      <div class="panel-heading">
                        <H2 class="panel-title"><span class="badge">'.$i.'</span> '.$resultados['Destination']["$i"].'</h2>
                      </div>
                      <div class="panel-body">
                        <h3 class="card-title pricing-card-title">'.number_format($resultados['Saved Money']["$i"],2).' <small class="text-muted">€ ahorro</small></h3>
                        <p>Del <b>'.$resultados["Departure"][$i].' al '.$resultados["Return"][$i].'</b> 
                          la precipitación será del <span class="label label-warning">'.number_format($resultados["Total Precip."][$i],3).'</span>, 
                          la probabilidad de lluvia será <span class="label label-info">'.number_format($resultados["Rain Probability"][$i],3).'</span>, 
                          la temperatura oscilará entre <span class="label label-default">'.(int)$resultados["Min Temp"][$i].'º y '.(int)$resultados["Max Temp"][$i].'º</span>,
                          la salud ambiental de la ciudad es <span class="label label-primary">'.$resultados["Enviro. Health"][$i].'</span>,
                          la vitalidad del ecosystema es <span class="label label-primary">'.$resultados["Ecosyst Vitality"][$i].'</span>,
                          el indice BigMac del país <span class="label label-danger">'.number_format($resultados["BigMac Index"][$i],2).'</span>,
                          la contaminación medioambiental CO2 <span class="label label-danger">'.number_format($resultados["tCO2"][$i], 2).'</span>,
                        </p>
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="'.number_format($score_total,2).'" aria-valuemin="0" aria-valuemax="100" style="width: '.$score_total.'%;">
                            '.number_format($score_total,2).'
                          </div>
                        </div>
                        <p><a class="btn btn-primary" href="destinos.php?city_name='.$resultados['Destination']["$i"].'" role="button">Ver Experiencias »</a></p>
                      </div>
                    </div>
                  </div>';
        }
?>            
        </div>
      <footer class="footer">
        <p>© 2018 Experience, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js.download"></script>
  

</body></html>