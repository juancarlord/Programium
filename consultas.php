<!DOCTYPE html>
<html>

<head>
    
    <title>Panel de Administrador</title>
    <?php require_once  'includes/bootstrapHead.php'; ?>
</head>

<body>
    <?php require_once 'includes/navBar.php'; ?>
    <?php require_once 'includes/loginModal.php'; ?>
    <?php require_once 'includes/signUpModal.php'; ?>
    
    <div class="container" style="margin-top: 200px;">
    	<div class="jumbotron">
    		<h1 class="display-4">Bienvenido al modulo de consultas</h1>
    		<br>
    		<br>
    		<div class="row">
    			<div class="col">
    				<p>Usuarios por pais, estado y ciudad</p>
    				<button class="btn-dark">Mostrar</button>
    			</div>
    			<div class="col">
    				<p>Usuarios que son profesores</p>
    				<button class="btn-dark">Mostrar</button>
    			</div>
    			<div class="col">
    				<p>Usuarios que son estudiantes</p>
    				<button class="btn-dark">Mostrar</button>
    			</div>
    		</div>
    	</div>
    </div>
    
    

    <?php require_once 'includes/bootstrapBody.php'; ?>
</body>

</html>