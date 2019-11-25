    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button">
            <div class="container">
                <a class="navbar-brand" href="index.php" style="font-family:Orbitron, sans-serif;">
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
                                <a class="dropdown-item" role="presentation" href="principiante.php">Principiante
                                </a>
                                <a class="dropdown-item" role="presentation" href="#">Intermedio</a>
                                <a class="dropdown-item" role="presentation" href="#">Avanzado</a>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#">Foros</a>
                        </li>
                    </ul>
                    <?php 
                        session_start();
                        if (!isset($_SESSION['sess_user_id']) && !isset($_SESSION['displayUser']) && !isset($_SESSION['name'])) {
                                require_once 'includes/spanNoSess.php'; 
                        }else{
                            require_once 'includes/spanSess.php';
                        }
                     ?>
                </div>
            </div>
        </nav>
        <a href=""></a>
    </div>