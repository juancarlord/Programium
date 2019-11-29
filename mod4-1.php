<!DOCTYPE html>
<html lang="en">
<head>
	<title>Frontend</title>
	<?php require_once 'includes/bootstrapHead.php'; ?>
</head>
<body>
	<?php require_once 'includes/navBar.php'; ?>
	<?php require_once 'includes/loginModal.php' ?>
	<?php require_once 'includes/signUpModal.php' ?>

	<?php require_once 'includes/modulo4/videomodals41.php'; ?>
	
	<div class="features-boxed">
        <div class="container carousel">
            <div class="intro" style="margin-top: 100px;">
                <h2 class="text-center">Frontend</h2>
                <p class="text-center">Explica que es el frontend y que lenguajes se usan para el frontend y como usarlos.</p>
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
			    	<a href="#html5" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/html5.jpg" alt="First slide">
			      <div class="mask"></div>
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>HTML5</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#css" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/css.jpg" alt="Second slide">
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>CSS</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#javascript" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/js.png" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>JavaScript</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#bootstrap" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/bootstrap.png" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>Bootstrap</h5>
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