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
	
	<?php require_once 'includes/modulo1/videomodals.php' ?>

	
	<div class="features-boxed">
        <div class="container carousel">
            <div class="intro" style="margin-top: 100px;">
                <h2 class="text-center">Conceptos basicos de la programacion</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
      		<div id="videoCarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#videoCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#videoCarousel" data-slide-to="1"></li>
			    <li data-target="#videoCarousel" data-slide-to="2"></li>
			    <li data-target="#videoCarousel" data-slide-to="3"></li>
			    <li data-target="#videoCarousel" data-slide-to="4"></li>
			    <li data-target="#videoCarousel" data-slide-to="5"></li>
			    <li data-target="#videoCarousel" data-slide-to="6"></li>
			    <li data-target="#videoCarousel" data-slide-to="7"></li>
			    <li data-target="#videoCarousel" data-slide-to="8"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<a href="#impPro" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/introapro.jpg" alt="First slide" href="#impPro" data-toggle="modal">			      
			      <div class="carousel-caption">
			      	<h5>Importancia de la programacion</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#algoritmo" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/algorithmia.jpg" alt="Second slide">
			      <div class="carousel-caption">
			      	<h5>Algoritmo</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#queEsPrograma" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/soft.jpg" alt="Third slide">
			      <div class="carousel-caption">
			      	<h5>Que es un programa</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#lengua" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/Pl.jpg" alt="Fourth slide">
			      <div class="carousel-caption">
			      	<h5>Lenguajes de programacion</h5>
			      </div>
			      </a>
			    </div>
			  	<div class="carousel-item">
			  		<a href="#IDE" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/ide.png" alt="Fifth slide">
			      <div class="carousel-caption">
			      	<h5>Editores de texto e IDE</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#pseudocodigo" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/pseudo.png" alt="Fifth slide">
			      <div class="carousel-caption">
			      	<h5>Pseudocodigo</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#DFD" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/dfd.png" alt="Fifth slide">
			      <div class="carousel-caption">
			      	<h5>Diagramas de flujo de datos</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#softDFD" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/StarUML.png" alt="Fifth slide">
			      <div class="carousel-caption">
			      	<h5>Software para DFD y Pseudocodigo</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#elementos" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/SoftComp.png" alt="Fifth slide">
			      <div class="carousel-caption">
			      	<h5>Elementos de un programa</h5>
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