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
                <h2 class="text-center">Módulo 3: Programación orientada a objetos con Java</h2>
                <p class="text-center">Aquí encontrarás algunas funciones que te servirán para mejorar tu proyecto de Java.</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="icon ion-android-desktop icon"></i>
                        <h3 class="name">Diagrama de clases UML y paso a Java</h3>
                        <p class="description">Aquí se explicará como se realiza un diagrama uml y pasarlo a Java.</p><a href="mod3-1.php" class="learn-more">Ingresa »</a>                
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height:313px;"><i class="icon-mouse icon"></i>
                        <h3 class="name" style="margin-top:26px;">Excepciones</h3>
                        <p class="description">Aquí encontrarás la explicación de que son las excepciones, como funcionan y como implementralas a tu proyecto.</p><a href="mod3-2.php" class="learn-more">Ingresa »</a>                
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height:312px;"><i class="fa fa-signal icon"></i>
                        <h3 class="name" style="margin-top:-27px;">Pruebas unitarias</h3>
                        <p class="description">Aquí encontrarás que son las prubas unitarias, como funcionan, para que sirven y como se hacen.</p><a href="mod3-3.php" class="learn-more">Ingresa »</a>                
                    </div>
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