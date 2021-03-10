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
    <title>Untitled</title>
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
        <div class="container"><a class="navbar-brand" href="/index.html">Mandaditos Express</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li><a class="btn btn-light action-button" role="button" href="seguimiento.php">Seguimiento</a></li>
                </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="envio.php">Nuevo Envio</a></span>
            </div>
        </div>
    </nav>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Repatidor a Cargo&nbsp;</h2>
            </div>
            <div class="row people">
                <div class="col-md-10 col-lg-9 col-xl-7 item">
                    <div class="box"><img class="rounded-circle" src="/assets/img/1.jpg">
                        <h3 class="name">Alex ID 1001</h3>

                        <p class="title">Repartidor Mandaditos Express</p>
                        <p class="description">Envio: <?php echo $_SESSION["s_envio"];?></p>
                        <p class="description">Cliente:<?php echo $_SESSION["s_NombreCliente"]; ?> &nbsp;</p>
                        <p class="description">Paquete:<?php 
                        if ($estadoLocal==1) {
                            echo 'Preparando Envio';
                        }elseif ($estadoLocal==2) {
                            echo 'En Transito';
                        }else {
                            echo'Entregado';
                        } ?> &nbsp;</p>
                        <p class="description">Responsable y atento&nbsp;</p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js"></script>
</body>

</html>