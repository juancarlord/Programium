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

	<?php require_once 'includes/modulo2/videomodals21.php'; ?>

	<div class="features-boxed">
        <div class="container carousel">
            <div class="intro" style="margin-top: 100px;">
                <h2 class="text-center">Presentación de JAVA</h2>
                <p class="text-center">Aquí encontrarás conceptos básicos y el origen.</p>
            </div>
      		<div id="videoCarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#videoCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#videoCarousel" data-slide-to="1"></li>
			    <li data-target="#videoCarousel" data-slide-to="2"></li>			   
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<a href="#origen" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/java.jpg" alt="First slide">
			      <div class="mask"></div>
			      <div class="carousel-caption">
			      	<h5>Origen</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#caracteristicas" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/carcateristicas.jpg" alt="Second slide">
			      <div class="carousel-caption">
			      	<h5>Características del lenguaje</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#wora" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/wora.png" alt="Third slide">
			      <div class="carousel-caption">
			      	<h5>Como escribir y ejecutar aplicaciones en Java</h5>
			      </div>
			      </a>
			    </div>
			    
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