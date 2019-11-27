<!DOCTYPE html>
<html>

<head>
    <title>PROGRAMIUM</title>
    <?php require_once 'includes/bootstrapHead.php'; ?>
</head>
<body>
    
    <?php require_once 'includes/navBar.php'; ?>
    <?php require_once 'includes/loginModal.php'; ?>
    <?php require_once 'includes/signUpModal.php'; ?>
    <?php require_once 'includes/siteInfo.php'; ?>
    
    <div class="float-none" id="promo" style="margin-top:103px;">
        <div class="jumbotron" style="font-weight:normal;margin-top:50px;margin-bottom:50px;">
            <h1>Bienvenido a Programium</h1>
            <p>Aqui podras encontrar una variedad de animaciones y videotutoriales para facilitarte el aprendizaje de la programacion en computadores!</p>
            <p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#siteInfo">
                    Conoce mas!
                </button>
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
                            <h4 class="card-title">Principiante</h4>
                            <h6 class="text-muted card-subtitle mb-2">Fundamentos de la programacion</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>                            
                            <a class="card-link" href="principiante.php">Ir al curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Intermedio</h4>
                            <h6 class="text-muted card-subtitle mb-2">Programacion orientada a objetos</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            <a class="card-link" href="intermedio.php">Ir al curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Avanzado</h4>
                            <h6 class="text-muted card-subtitle mb-2">Desarrollo Fullstack</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            <a class="card-link" href="avanzado.php">Ir al curso</a>
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
                            <a href="https://twitter.com/JuancarlordG">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://instagram.com/Juancarlord">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 offset-xl-0 item">
                    <div class="box">
                        <img class="rounded-circle" src="assets/img/2.jpg">
                        <h3 class="name">Angie Vargas</h3>
                        <p class="title">Desarrollador</p>
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
    
    <?php require_once 'includes/footer.php'; ?>
    
    <?php require_once 'includes/bootstrapBody.php'; ?>
</body>

</html>