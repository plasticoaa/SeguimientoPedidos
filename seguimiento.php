<?php 
session_start();

//Inicia sersion mi loco o para afuera
if ($_SESSION["s_envio"] === null){
	header("Location: index.php");
}


$estadoLocal=0;
if ($_SESSION["s_EnvioEstado"]==='Preparacion') {

   $estadoLocal=1;    
}elseif ($_SESSION["s_EnvioEstado"]==='Transito') {
    $estadoLocal=2;
}else {
    $estadoLocal=3;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mandaditos | Seguimiento</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-sm navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="/index.php">Mandaditos Express</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item"></li>
                </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="/envio.php">Nuevo Envio</a></span>
            </div>
        </div>
    </nav>
    <section>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <h1>Seguimiento Envio</h1>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Cliente: <?php echo $_SESSION["s_NombreCliente"];?></h4>
                    </div>
                    <div class="col">
                        <h4>Repartidor:&nbsp; <?php echo $_SESSION["s_NombreRepartidor"];?> </h4>
                    </div>
                    <div class="col">
                        <h4></h4><a class="btn btn-info text-monospace border rounded-pill action-button" role="button" href="/ID.php">Ver Repartidor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h1 class="text-center">Estado del Envio</h1>
            
    </div>

    <div class="row">
        <div class="col">
            <h4>Direccion: <?php 
            echo $_SESSION["s_DireccionEnvio"];
            ?></h4>
        </div>
        <div class="col">
            <h4>Recibe: <?php 
            echo $_SESSION["s_Receptor"];
            ?></h4>
        </div>
        <div class="col">
            <h4>Observaciones:
            <?php 
            echo $_SESSION["s_Observaciones"];
            ?>
            </h4>
        </div>
    
                <p class="text-center"></p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-map-marker icon"></i>
                        <h3 class="name">Preparación&nbsp;</h3>
                        <p class="text-justify description">Tu envió esta siendo procesado por nuestro equipo, una vez listo un repartidor se encargara del traslado de tu paquete.&nbsp;</p>
                        <div class="alert alert-dark" role="alert"><span>
                         <?php  
                         if ($estadoLocal==1) {
                            echo 'Tu envió se encuentra en esta Fase';
                         }
                         ?>   
                        </span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name">En transito</h3>
                        <p class="text-justify description">Tu pedido se encuentra transportándose en este&nbsp; momento, puedes consultar el repartidor a cargo&nbsp;</p>
                        <div class="alert alert-dark" role="alert"><span>
                        <?php  
                         if ($estadoLocal==2) {
                            echo 'Tu envió se encuentra en esta Fase';
                         }
                         ?> 
                        </span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Pedido Entregado</h3>
                        <p class="description">Puedes verificar la hora de entrega, la persona que recibió la mercadería y gestionar tu nuevo envio</p>
                        <?php  
                         if ($estadoLocal==3) {
                            echo 'Tu pedio fue Entregado';
                         }
                         ?> 
                        
                        
                    </div><a class="btn btn-primary" role="button" href="/envio.php">Nuevo Envio</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col offset-xl-2"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js"></script>
</body>

</html>