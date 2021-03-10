<?php require_once "vistas/header.php" ?>
    <header class="masthead text-white text-center" style="background:url('/assets/img/bg-masthead.jpg')no-repeat center center;background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            
            <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Seguimiento de Envió</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form class="user"  id="formLogin" action="" method="post">
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input class="form-control form-control-user" type="number" id="envio"  placeholder="ID Envio" name="envio">
                            <div class="col-12 col-md-3">
                            <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Ver"></div>
                        </div>
                    </form>
                </div>
            
            </div>
        </div>
    </header>
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-screen-desktop m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Seguimiento del Envio</h3>
                        <p class="lead mb-0">Verifica el estado de tu envio&nbsp;</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-people m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Verifica la identidad de tu mensajero</h3>
                        <p class="lead mb-0">Medidas extra de seguridad para garantizar la seguridad de tus envios</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-check m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Envíos Rápido&nbsp;</h3>
                        <p class="lead mb-0">Programa rápidamente tus envíos mediante nuestra web o comunícate con uno de nuestros asesores</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="codigo.js"> </script>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  
    <?php require_once "vistas/footer.php" ?>
