<div class="modal fade" id="signupPop" role="dialog" aria-labelledby="Signup" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-clean">
                    <form method="POST" action="php/createUser.php" data-aos="fade-up" style="background-color:rgb(248,248,248);">
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
    </div>
</div>