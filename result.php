<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="images/logoS.jpg" />
    <style type="text/css">
      .p_result{background: #FFF; color: #000; font-size: 1.1em;}
      .boxResult{padding-top:80px;}
    </style>
    <title>Señales</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
<?php // content="text/plain; charset=utf-8"
session_start(); // inciando una sesión
include("proceso.php");
?>
  <body>
   <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Resultado</h3>              
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="index.html">Inicio</a></li>
                  <li><a href="detalles.html">¿Como funciona?</a></li>
                  <li><a href="acercade.html">Acerca de</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="boxResult">          
            <h4>Texto:</h4>           
            <p class="p_result"><?php echo $text;?></p>
            <h4>Código ASCII:</h4>
            <p class="p_result"><?php foreach($arr_Ascii as $value)print($value." ");?></p>
            <h4>Código Binario:</h4>
            <p class="p_result"><?php $cont=1; foreach($_SESSION['data'] as $value){print($value);if($cont==8){print(" ");$cont=0;}$cont++;};?></p>
            <h4>Gráfica:</h4>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="overflow-x: scroll;">
             <img src="grafica.php">
            </div>
          </div>        
        </div>
      </div>
    </div>    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>