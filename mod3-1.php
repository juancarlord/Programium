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
	
	<div class="features-boxed">
        <div class="container carousel">
            <div class="intro" style="margin-top: 100px;">
                <h2 class="text-center">Frontend</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
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
			      <img class="d-block w-100" style="height: 25em;" src="img/html5.jpg" alt="First slide">
			      <div class="mask"></div>
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>HTML5</h5>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" style="height: 25em;" src="img/css.jpg" alt="Second slide">
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>CSS</h5>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" style="height: 25em;" src="img/js.png" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>JavaScript</h5>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" style="height: 25em;" src="img/bootstrap.png" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
			      	<h5>Bootstrap</h5>
			      </div>
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