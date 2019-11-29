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
    <?php require_once 'includes/navBar.php' ?>

    <div class="float-none" style="margin-top:115px;">
        <form action="php/extras.php" method="POST">
            <div class="form-row">
                
                <div class="form-group col-md-6">
                    <label for="firstName">Ingresa tu nombre: </label>
                    <input type="text" name="firstName" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Ingresa tus apellidos:</label>
                    <input type="text" name="lastName" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="professor">Es profesor?</label>
                    <select name="professor" id="" class="form-control">
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="birthDate">Fecha de nacimiento:</label>
                    <input type="date" name="birthDate" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Pais:</label>
                    <select name="country" id="country" class="form-control">
                        <option value="1">COLOMBIA</option>                        
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="job">Estado:</label>
                    <select name="state" id="state" class="form-control">
                        <option value="1">BOYACA</option>
                        <option value="2">SANTANDER</option>
                        <option value="3">CASANARE</option>                        
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Ciudad:</label>
                    <select name="city" id="city" class="form-control">
                        <option value="1">Tunja</option>
                        <option value="2">Bucaramanga</option>
                        <option value="3">Yopal</option>                        
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="job">Ocupacion</label>
                    <select name="job" id="" class="form-control">
                        <option value="1">Estudiante</option>
                        <option value="2">Empleado</option>
                        <option value="3">Independiente</option>
                        <option value="4">Otra</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-control">
                    <label for="interest">Razon por la cual te inscribes:</label>
                    <textarea name="interest" id="" cols="30" rows="10" class="form-control" placeholder="Sea breve"></textarea>
                </div>
            </div>
            <div class="form-row">
                <input type="submit" name="send" value="Actualizar datos" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/comboupdater.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>