<!DOCTYPE html>
<html>

<head>
    
    
    <title>PROGRAMIUM</title>
    <?php require_once 'includes/bootstrapHead.php';  ?>
    
</head>

<body>
    <?php require_once 'includes/navBar.php'; ?>
    <?php require_once 'includes/loginModal.php'; ?>
    <?php require_once 'includes/signUpModal.php'; ?>

    <div class="features-boxed">
        <div class="container">
            <div class="intro" style="margin-top: 150px;">
                <h2 class="text-center">Módulo 1: Introducción a la programación estructurada</h2>
                <p class="text-center">En este modulo encontrarás cosas básicas para aprender a programar.</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="icon ion-android-desktop icon"></i>
                        <h3 class="name">Conceptos básicos de programación</h3>
                        <p class="description">Encontrarás conceptos básicos que debes saber para ser un buen programador.</p><a href="mod1-1.php" class="learn-more">Ingresa »</a>                
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height:313px;"><i class="icon-mouse icon"></i>
                        <h3 class="name" style="margin-top:26px;">Estructuras secuenciales</h3>
                        <p class="description">Te explicará cuales son las estructuras secuenciales y como funcionan.</p><a href="mod1-2.php" class="learn-more">Ingresa »</a>                
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height:312px;"><i class="fa fa-signal icon"></i>
                        <h3 class="name" style="margin-top:-27px;">Estructuras condicionales</h3>
                        <p class="description">Te explicará cuales son las estructuras condicionales y como funcionan</p><a href="mod1-3.php" class="learn-more">Ingresa »</a>                
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-leaf icon"></i>
                        <h3 class="name">Estructuras repetivas </h3>
                        <p class="description">Te explicará cuales son las estructuras repetitivas y como funcionan.</p><a href="mod1-4.php" class="learn-more">Ingresa »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-plane icon"></i>
                        <h3 class="name">Arreglos de tamaño fijo </h3>
                        <p class="description">Aquí aprenderás el funcionamiento de los arreglos de tamaño fijo</p><a href="mod1-5.php" class="learn-more">Ingresa »</a></div>
                </div>
                
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>
    <div></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>