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
    		<div class="row justify-content-center">
            <form action="" method="POST">
    			<div class="col">
    				<p>Usuarios por pais, estado y ciudad</p>
    				<input type="submit" name="queryAll" value="Mostrar" class="btn btn-dark">
    			</div>
            </form>
            <form action="" method="POST">
    			<div class="col">
    				<p>Usuarios que son profesores</p>
    				<input type="submit" name="queryTeach" value="Mostrar" class="btn btn-dark">

    			</div>
            </form>
            <form action="" method="POST">
    			<div class="col">
    				<p>Usuarios que son estudiantes</p>
    				<input type="submit" name="queryStud" value="Mostrar" class="btn btn-dark">
    			</div>                
            </form>
    		</div>            
    	</div>
            <?php require_once 'php/queryTeacher.php'; ?>
            <?php require_once 'php/queryStudent.php'; ?>  
            <?php require_once 'php/queryAll.php'; ?>  

    </div>
    
    

    <?php require_once 'includes/bootstrapBody.php'; ?>
</body>

</html>