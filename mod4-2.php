<!DOCTYPE html>
<html lang="en">
<head>
	<title>Backend</title>
	<?php require_once 'includes/bootstrapHead.php'; ?>
</head>
<body>
	<?php require_once 'includes/navBar.php'; ?>
	<?php require_once 'includes/loginModal.php' ?>
	<?php require_once 'includes/signUpModal.php' ?>
	
	<?php require_once 'includes/modulo4/videomodals42.php'; ?>

	<div class="features-boxed">
        <div class="container carousel">
            <div class="intro" style="margin-top: 100px;">
                <h2 class="text-center">Backend</h2>
                <p class="text-center">Explica el concepto de backend, que lenguajes se usan para el desarrollo de este y como utilizarlos.</p>
            </div>
      		<div id="videoCarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#videoCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#videoCarousel" data-slide-to="1"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<a href="#php" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/php.jpg" alt="First slide">
			      <div class="mask"></div>
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>PHP</h5>
			      </div>
			      </a>
			    </div>
			    <div class="carousel-item">
			    	<a href="#mysql" data-toggle="modal">
			      <img class="d-block w-100" style="height: 25em;" src="img/mysql.jpg" alt="Second slide">
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>MySQL</h5>
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