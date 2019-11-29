<!DOCTYPE html>
<html lang="en">
<head>
	<title>Programium</title>
	<?php require_once 'includes/bootstrapHead.php'; ?>
</head>
<body>
	<?php require_once 'includes/navBar.php' ?>
	<?php require_once 'includes/loginModal.php'; ?>
    <?php require_once 'includes/signUpModal.php'; ?>

	<?php require_once 'includes/modulo1/videomodals12.php'; ?>

	<div class="features-boxed">
        <div class="container carousel">
            <div class="intro" style="margin-top: 100px;">
                <h2 class="text-center">Estructuras secuenciales</h2>
                <p class="text-center">Explica cuales son las estructuras secuenciales y como funcionan.</p>
            </div>
      		<div id="videoCarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#videoCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#videoCarousel" data-slide-to="1"></li>
			    <li data-target="#videoCarousel" data-slide-to="2"></li>
			    <li data-target="#videoCarousel" data-slide-to="3"></li>			    
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<a href="#declaracion" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/variable.jpg" alt="First slide">
			      <div class="mask"></div>
			      <div class="carousel-caption">
			      	<h5>Declaración de variables y constantes básicas</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#dataio" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/io.jpg" alt="Second slide">
			      <div class="carousel-caption">
			      	<h5>Entrada y salida de datos</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#asignacion" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/arithmetic.png" alt="Third slide">
			      <div class="carousel-caption">
			      	<h5>Asignación y operaciones aritméticas</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#funarit" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/func.jpg" alt="Fourth slide">
			      <div class="carousel-caption">
			      	<h5>Funciones aritméticas</h5>
			      </div>
			    </div>
			    </a>
			  </div>
			  <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Anterior</span>
			  </a>
			  <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Siguiente</span>
			  </a>

			  </div>
			</div>
			<br>
			<br>
			<br>
			<br>
        </div>


    <?php require_once 'includes/footer.php'; ?>

    <?php require_once 'includes/bootstrapBody.php'; ?>
</body>
</html>