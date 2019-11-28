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

	<?php require_once 'includes/modulo1/videomodals15.php'; ?>

	<div class="features-boxed">
        <div class="container carousel">
            <div class="intro" style="margin-top: 100px;">
                <h2 class="text-center">Arreglos de tamano fijo</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
      		<div id="videoCarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#videoCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#videoCarousel" data-slide-to="1"></li>
			    <li data-target="#videoCarousel" data-slide-to="2"></li>			    			    
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<a href="unidimension" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/array.png" alt="First slide">
			      <div class="mask"></div>
			      <div class="carousel-caption">
			      	<h5>Arreglos unidimensionales</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#bidimension" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/biarray.png" alt="Second slide">
			      <div class="carousel-caption">
			      	<h5>Arreglos bidimensionales</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="3dimension" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/3darray.jpg" alt="Third slide">
			      <div class="carousel-caption">
			      	<h5>Arreglos de tres o mas dimensiones</h5>
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