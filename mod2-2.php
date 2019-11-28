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

	<?php require_once 'incldes/modulo2/videomodals22.php' ?>

	<div class="features-boxed">
        <div class="container carousel">
            <div class="intro" style="margin-top: 100px;">
                <h2 class="text-center">Sintaxis basica de JAVA</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
      		<div id="videoCarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#videoCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#videoCarousel" data-slide-to="1"></li>
			    <li data-target="#videoCarousel" data-slide-to="2"></li>			   
			    <li data-target="#videoCarousel" data-slide-to="3"></li>			   
			    <li data-target="#videoCarousel" data-slide-to="4"></li>			   			   			   			    
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<a href="#tipoDeDato" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/javadata.png" alt="First slide">
			      <div class="mask"></div>
			      <div class="carousel-caption">
			      	<h5>Tipos de datos</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#variables" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/javavar.png" alt="Second slide">
			      <div class="carousel-caption">
			      	<h5>Variables y constantes</h5>
			      </div>
			      </a>
			    </div>
				<div class="carousel-item">
					<a href="#secuenciacion" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/javasec.jpg" alt="Fourth slide">
			      <div class="carousel-caption">
			      	<h5>Estructuras de secuenciacion</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#repetitivas" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/javarep.jpg" alt="Fifth slide">
			      <div class="carousel-caption">
			      	<h5>Estructuras repetitivas</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#condicionales" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/javacond.jpg" alt="Sixth slide">
			      <div class="carousel-caption">
			      	<h5>Estructuras condicionales</h5>
			      </div>
			      </a>
			    </div>			    
			  </div>
			  <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
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