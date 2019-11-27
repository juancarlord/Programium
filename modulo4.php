<!DOCTYPE html>
<html>

<head>
    
    
    <title>PROGRAMIUM</title>
    <?php require_once 'includes/bootstrapHead.php';  ?>
    
</head>

<body>
    <?php require_once 'includes/navBar.php'; ?>
    <?php require_once 'includes/loginModal.php'; ?>
    <?php require_once 'includes/signUpModal.php'; ?>

    <div class="features-boxed">
        <div class="container">
            <div class="intro" style="margin-top: 150px;">
                <h2 class="text-center">Modulo 4: Conviertete en desarrollador full-stack</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="icon ion-android-desktop icon"></i>
                        <h3 class="name">Frontend</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="mod3-1.php" class="learn-more">Ingresa »</a>                
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="height:313px;"><i class="icon-mouse icon"></i>
                        <h3 class="name" style="margin-top:26px;">Backend</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href="mod3-2.php" class="learn-more">Ingresa »</a>                
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>
    <div></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>