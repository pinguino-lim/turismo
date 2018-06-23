<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
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

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
      </div>      
      <div class="jumbotron">
        <h2>Descubre tu Destino Sostenible</h2>
        <!-- <p>Quieres descubrir una nueva experiencia, vivir la verdadera tradición, conocer lugares que nadie m'as ha visitado y cuidar el medio ambiente.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p> -->                  
      </div>
      <div>
        <div class="card mb-4 box-shadow">
            <div class="card-body">
                <dl class="dl-horizontal">
                <?php
                    $myfile = fopen("rs/output.txt", "r") or die("Unable to open file!");            
                    $result = fgets($myfile);
                    fclose($myfile);
                    $resultados = json_decode($result,TRUE);
                    for($i=1;$i<count($resultados);$i++){
                        echo '<div class="card-header">
                                <h4 class="my-0 font-weight-normal">TOP '.$i.' : '.$resultados['Destination']["$i"].'</h4>
                            </div>';
                        echo "<dt>Fechas : </dt><dd>".$resultados['Departure']["$i"].' al '.$resultados['Return']["$i"].'</dd>';
                        echo "<dt>Precio Vuelo : </dt><dd>€ ".$resultados['Flight Price']["$i"].'</dd>';
                        echo "<dt>Precio Hotel : </dt><dd>€ ".$resultados['Hotel Price']["$i"].'</dd>';
                        echo "<dt>Indice BigMac : </dt><dd>".$resultados['BigMac Index']["$i"].'</dd>';
                        echo "<dt>Precipitacion : </dt><dd>".$resultados['Total Precip.']["$i"].'</dd>';
                        echo "<dt>Probabilida de Lluvia : </dt><dd>".$resultados['Rain Probability']["$i"].'</dd>';
                        echo "<dt>Temperatura Max. : </dt><dd>".$resultados['Max Temp']["$i"].'</dd>';
                        echo "<dt>Salud Ambiental : </dt><dd>".$resultados['Enviro. Health']["$i"].'</dd>';
                        echo "<dt>Vitalidad del Ecosistema : </dt><dd>".$resultados['Ecosyst Vitality']["$i"].'</dd>';
                        echo "<dt>Sostenibilidad : </dt><dd>".$resultados['Score']["$i"].'</dd>';
                        echo "<button type='button' class='btn btn-lg btn-block btn-success'>Mas información</button>";
                    }
                ?>
                , Rain Probability, Max Temp, Enviro. Health, Ecosyst Vitality, Score
                </dl>
                <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
            </div>
        </div>      
      </div>            
      <div class="row marketing">                    
        <div class="col-lg-6">
            <?php
            $myfile = fopen("rs/output.txt", "r") or die("Unable to open file!");            
            $result = fgets($myfile);
            fclose($myfile);
            $resultados = json_decode($result,TRUE);
            // $temperatureMin = $json['daily']['data'][0]['temperatureMin'];
            echo $resultados['Destination']['1'];
            ?>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <footer class="footer">
        <p>© 2018 Experience, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js.download"></script>
  

</body></html>