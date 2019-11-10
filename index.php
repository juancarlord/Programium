<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAMIUM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button">
            <div class="container">
                <a class="navbar-brand" href="#" style="font-family:Orbitron, sans-serif;">
                    <img src="assets/img/logoNoNombre.png" data-bs-hover-animate="swing" style="width:65px;">Programium
                </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Cursos</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="basico.html">Basico
                                </a>
                                <a class="dropdown-item" role="presentation" href="#">Intermedio</a>
                                <a class="dropdown-item" role="presentation" href="#">Avanzado</a>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#">Foros</a>
                        </li>
                    </ul><span class="navbar-text actions"> 
                        <a href="#loginPop" class="login" data-toggle="modal" >Inicia Sesion</a>
                        <a class="btn btn-light action-button" role="button" href="#signupPop" data-bs-hover-animate="pulse" data-toggle="modal" style="background-color:rgb(1,115,157);">Registrate</a></span>
                </div>
            </div>
        </nav>
        <a href=""></a>
    </div>
    <div class="modal fade" id="signupPop">
        <div class="modal-body">
            <div class="login-clean">
                <form method="post" action="" data-aos="fade-up" style="background-color:rgb(248,248,248);">
                    <h2 class="sr-only">Signup Form</h2>
                    <div class="illustration">
                        <img src="assets/img/logoNoNombre.png" style="width:140px;">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Correo electronico">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="username" name="username" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña" aria-describedby="passwordHelp">
                        <small id="passwordHelp" class="form-text text-muted">
                            Su contraseña debe tener minimo 5 caracteres y solo puede contener caracteres especiales tales como "/*-+!@#$%& "
                        </small>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary active btn-block" type="submit" >Crear usuario</button>
                    </div>
                    <a href="#loginPop" data-toggle="modal" class="forgot">Ya tengo mi cuenta</a>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="loginPop">
        <!-- <div class="modal-dialog"> -->
            <!-- <div class="modal-content"> -->
                <div class="modal-body">
                    <div class="login-clean" >
                        <form method="post" data-aos="fade-up" style="background-color:rgb(248,248,248);">
                            <h2 class="sr-only">Login Form</h2>
                            <div class="illustration"><img src="assets/img/logoNoNombre.png" style="width:140px;"></div>
                            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Correo electronico"></div>
                            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Clave"></div>
                            <div class="form-group"><button class="btn btn-primary active btn-block" type="submit">Iniciar sesion</button></div><a href="#" class="forgot">Olvide mi contraseña</a></form>
                    </div>
                    
                </div>    
            <!-- </div> -->
        <!-- </div> -->
    </div>
    <div class="float-none" id="promo" style="margin-top:103px;">
        <div class="jumbotron" style="font-weight:normal;margin-top:50px;margin-bottom:50px;">
            <h1>Bienvenido a Programium</h1>
            <p>Aqui podras encontrar una variedad de animaciones y videotutoriales para facilitarte el aprendizaje de la programacion en computadores!</p>
            <p>
                <a class="btn btn-primary" role="button" href="#" style="background-color:rgb(1,115,157);">Conoce mas!</a>
            </p>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center" style="margin-top:25px;margin-bottom:25px;">Niveles ofrecidos</h1>
    </div>
    <div style="margin-bottom:50px;margin-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basico</h4>
                            <h6 class="text-muted card-subtitle mb-2">HTML -- CSS</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            <a class="card-link" href="#">Link</a>
                            <a class="card-link" href="#">Link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Intermedio</h4>
                            <h6 class="text-muted card-subtitle mb-2">JavaScript -- Bootstrap</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            <a class="card-link" href="#">Link</a>
                            <a class="card-link" href="#">Link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Avanzado</h4>
                            <h6 class="text-muted card-subtitle mb-2">PHP -- MYSQL</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            <a class="card-link" href="#">Link</a>
                            <a class="card-link" href="#">Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Nuestro Equipo</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-6 col-xl-6 offset-xl-0 item">
                    <div class="box">
                        <img class="rounded-circle" src="assets/img/IMG_0640.jpg" id="profilePic">
                        <h3 class="name">Juan Carlos Gomez</h3>
                        <p class="title">Desarrollador</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social">
                            <a href="https://facebook.com/JuanCarlosGuitar">
                                <i class="fa fa-facebook-official"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 offset-xl-0 item">
                    <div class="box">
                        <img class="rounded-circle" src="assets/img/2.jpg">
                        <h3 class="name">Emily Clark</h3>
                        <p class="title">Artist</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social">
                            <a href="#">
                                <i class="fa fa-facebook-official"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#">
                    <i class="icon ion-social-instagram"></i>
                </a>
                <a href="#">
                    <i class="icon ion-social-snapchat"></i>
                </a>
                <a href="#">
                    <i class="icon ion-social-twitter"></i>
                </a>
                <a href="#">
                    <i class="icon ion-social-facebook"></i>
                </a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#">Inicio</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Acerca de</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Politica de privacidad</a>
                </li>
            </ul>
            <p class="copyright">Programium © 2019</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>