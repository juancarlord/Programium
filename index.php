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
            <p>Aquí podrás encontrar una variedad de animaciones y videotutoriales para facilitarte el aprendizaje de la programación en computadores!</p>
            <p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#siteInfo">
                    Conoce más!
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
                            <h6 class="text-muted card-subtitle mb-2">Fundamentos de la programación</h6>
                            <p class="card-text">Para realizar este curso no necesitas tener conocimientos en programación ya que en este curso explica desde lo más básico.</p>                            
                            <a class="card-link" href="principiante.php">Ir al curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Intermedio</h4>
                            <h6 class="text-muted card-subtitle mb-2">Programación orientada a objetos</h6>
                            <p class="card-text">En este curso encontrarás algunos temas referentes a la programación orientada a objetos.</p>
                            <a class="card-link" href="intermedio.php">Ir al curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Avanzado</h4>
                            <h6 class="text-muted card-subtitle mb-2">Desarrollo Fullstack</h6>
                            <p class="card-text">Este curso tiene contenido a todo lo relacionado con programación para páginas web.</p>
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
                <p class="text-center">Está compuesto por personas expertas en programación y diseño.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-6 col-xl-6 offset-xl-0 item">
                    <div class="box">
                        <img class="rounded-circle" src="assets/img/IMG_0640.jpg" id="profilePic">
                        <h3 class="name">Juan Carlos Gómez</h3>
                        <p class="title">Desarrollador</p>
                        <p class="description">Estudiante de ingeniería de sistemas de la Universidad de Boyacá, con experiencia en diseño y produccion de medios. Colaboro con la aplicación de Bootstrap al diseño del sitio web. </p>
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
                        <img class="rounded-circle" src="assets/img/pp.jpg">
                        <h3 class="name">Angie Vargas</h3>
                        <p class="title">Desarrolladora</p>
                        <p class="description">Estudiante de ingeniería de sistemas de la Universidad de Boyacá. Colaboro con el diseño y desarrollo de la base de datos para el sitio web. </p>
                        <div class="social">
                            <a href="https://www.facebook.com/angie.vargas.3158">
                                <i class="fa fa-facebook-official"></i>
                            </a>
                            <a href="https://twitter.com/angievarguitas">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/angie_vargas_02/">
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